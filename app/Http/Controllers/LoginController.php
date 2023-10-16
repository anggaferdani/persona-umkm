<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\BrandPersonalityAaker as BrandPersonalityAakerModel;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index(){
        return view('NewPages.Opening');
    }

    public function register(){
        return view('NewPages.Registrasi');
    }

    public function resetpassword(){
        return view('NewPages.LupaPassword');
    }

    public function afterlogin(Request $request){
        // dd($request);
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ],[
            'email' => 'Email Harus Diisi',
            'email.email' => 'Format Email Salah',
            'password' => 'Password Harus Diisi',
            'password.min' => 'Password Harus Diisi Minimal 8 Karakter',
       ]);

        $infologin = [ 
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
            if(auth()->user()->role == 3 && auth()->user()->verification == 'verified' && auth()->user()->status == 1){
                $bpa = BrandPersonalityAakerModel::where('created_by', Auth::user()->id)->first();
                if($bpa){
                    return redirect('/beranda');
                }else{
                    return redirect('/welcome');
                }
            }
            if(auth()->user()->role == 3 && auth()->user()->verification == 'verified' && auth()->user()->status == 2){
                Alert::error('Error', 'Akun Anda Telah Dinonaktifkan');
                return redirect('/')->with('verif', 'Akun Anda Telah Dinonaktifkan');
            }
            if(auth()->user()->role == 3 && auth()->user()->verification == 'unverified' && auth()->user()->status == 1){
                Alert::error('Error', 'Akun Anda Belum Terverifikasi, Hubungi Admin Untuk Memverifikasi Akun');
                return redirect('/')->with('verif', 'Akun Anda Belum Terverifikasi, Hubungi Admin Untuk Memverifikasi Akun');
            }
            else{
                Alert::error('Error', 'Username atau Password Salah');
                return redirect('/')->with('error', 'Username atau Password Salah!');
            }
        }else{
            Alert::error('Error', 'Username atau Password Salah');
            return redirect('/')->with('error', 'Username atau Password Salah!');
        }
    }

    public function postregister(Request $request){
        $this->validate($request,[
            'email' => 'required|email',
            'name' => 'required',
            'password' => 'required|min:8',
        ],[
            'email' => 'Input Your Email',
            'email.email' => 'Must Be Email',
            'name' => 'Input Your Username',
            'password' => 'Input Your Password',
            'password.min' => 'Password Must Be 8 Character',
        ]);

        $otp = rand(10000,999999);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->otp = $otp;
        $user->role = 3;
        $user->status = 1;
        $user->verification = 'unverified';

        $user->save();
        $mail = [
            'subject' => 'Otp Code',
            'to' => $user->email,
            'email' => 'testing@gmail.com',
            'from' => 'Testing',
            'otp' => $user->otp,
        ];

        Mail::send('pages.sendmail', $mail, function($message) use ($mail){ 
            $message->to($mail['to']) 
            ->from($mail['email'], $mail['from']) 
            ->subject($mail['subject']); 
        });

        Alert::success('Succes', 'Kode Otp Dikirim Ke Email Anda');
        return redirect('/otp/'.$user->id);

    }

    public function otp($id) {
        $user = User::find($id);
        return view('NewPages.Otp', compact('user'));
    }

    public function otpresent($id){
        $otp = rand(10000,999999);
        $user = User::find($id);
        $user->otp = $otp;
        $user->save();

        $mail = [
            'subject' => 'Otp Code',
            'to' => $user->email,
            'email' => 'testing@gmail.com',
            'from' => 'Testing',
            'otp' => $user->otp,
        ];

        Mail::send('pages.sendmail', $mail, function($message) use ($mail){ 
            $message->to($mail['to']) 
            ->from($mail['email'], $mail['from']) 
            ->subject($mail['subject']); 
        });

        Alert::success('Success', 'Kode OTP Telah Dikirim Ulang Ke Email Anda');
        return redirect()->back();

    }

    public function otpsubmit(Request $request, $id){
        $user = User::find($id);
        $otp = '';
        foreach ($request->otp as $key => $value) {
            $otp .= $value;
        }

        if($otp == $user->otp){
            $user->verification = 'verified';
            $user->save();
            
            Alert::success('Success', 'Anda Telah Terdaftar Silahkan Login');
            return redirect('/');
        }else{
            Alert::error('Error', 'Kode Otp Salah');
            return redirect()->back();
        }


    }
}
