<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Marketer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ResetPassword;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\BrandPersonalityAaker as BrandPersonalityAakerModel;

class LoginController extends Controller
{
    public function index(){
        return view('NewPages.Opening');
    }

    public function register(){
        return view('NewPages.Registrasi');
    }

    public function login(){
        return view('pages.authentications.login');
    }

    public function postLogin(Request $request){
        $this->validate($request, [
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ]);

        $credentials = array(
            'email' => $request['email'],
            'password' => $request['password'],
        );

        if(Auth::guard('web')->attempt($credentials)){
            if(auth()->user()->status == 1){
                if(auth()->user()->role == 1){
                    return redirect()->route('superadmin.dashboard');
                }elseif(auth()->user()->role == 2){
                    return redirect()->route('admin.dashboard');
                }else{
                    return back();
                }
            }elseif(auth()->user()->status == 2){
                Auth::guard('web')->logout();
                return redirect()->route('login')->with('fail', 'Your account has been deactivated');
            }
        }else{
            return redirect()->route('login')->with('fail', 'The email or password you entered is incorrect. Please try again');
        }
    }

    public function resetpassword(){
        return view('NewPages.LupaPassword');
    }

    public function postresetpassword(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
        ],[
            'email' => 'Email Harus Diisi!',
            'email.email' => 'Format Email Salah!',
        ]);
        $token = Str::random(64);
        $verify = route('mailreset', $token);
        $userforgot = User::where('email', $request->email)->count();
        if($userforgot > 0){

            $resetpassword = new ResetPassword();
            $resetpassword->email = $request->email;
            $resetpassword->token = $token;
            $resetpassword->save();
            $mail = [ 
                'kepada' => $request->email,
                'email' => 'personaumkm@gmail.com', 
                'dari' => 'Persona UMKM', 
                'subject' => 'Reset Password',
                'url' => $verify,
            ]; 
        
            Mail::send('mail-reset-password', $mail, function($message) use ($mail){ 
                $message->to($mail['kepada']) 
                ->from($mail['email'], $mail['dari']) 
                ->subject($mail['subject']); 
            });
            
        Alert::success('Success', 'Link Telah Dikirim Ke Email Anda');
        return redirect()->back();
        }else{
            Alert::error('Error', 'Email Anda Tidak Terdaftar');
            return redirect()->back();
        }
    }

    public function mailreset($token){
        $email = ResetPassword::where('token', $token)->first();
        return view('NewPages.after-mail-reset', compact('email', 'token'));
    }

    public function aftermailreset(Request $request){
        $this->validate($request, [
            'password' => 'required|min:8',
        ],[
            'password' => 'Password Harus Diisi',
            'password.min' => 'Password Harus Diisi Minimal 8 Karakter',
        ]);

        $email = ResetPassword::where('token', $request->token);
        $user = User::where('email', $request->email)->first();

        $user->password = bcrypt($request->password);
        $user->save();

        Alert::success('Success', 'Password Telah Di Ubah Silahkan Login');
        return redirect('/');
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
                    return redirect('/umkm/beranda');
                }else{
                    return redirect('/umkm/welcome');
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
            if(auth()->user()->role == 4 && auth()->user()->verification == 'verified' && auth()->user()->status == 1){
                $bpa = BrandPersonalityAakerModel::where('created_by', Auth::user()->id)->first();
                if($bpa){
                    return redirect('/marketer/beranda');
                }else{
                    return redirect('/marketer/welcome');
                }
            }
            if(auth()->user()->role == 4 && auth()->user()->verification == 'verified' && auth()->user()->status == 2){
                Alert::error('Error', 'Akun Anda Telah Dinonaktifkan');
                return redirect('/')->with('verif', 'Akun Anda Telah Dinonaktifkan');
            }
            if(auth()->user()->role == 4 && auth()->user()->verification == 'unverified' && auth()->user()->status == 1){
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
            'email' => 'required|email|unique:users,email',
            'name' => 'required',
            'password' => 'required|min:8',
        ],[
            'email' => 'Input Your Email',
            'email.email' => 'Must Be Email',
            'name' => 'Input Your Username',
            'password' => 'Input Your Password',
            'password.min' => 'Password Must Be 8 Character',
        ]);

        $otp = rand(100000,999999);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->no_telp = $request->no_telp;
        $user->password = bcrypt($request->password);
        $user->otp = $otp;
        $user->role = 3;
        $user->status = 1;
        $user->verification = 'unverified';

        $user->save();
        $mail = [
            'subject' => 'Otp Code',
            'to' => $user->email,
            'email' => 'personaumkm@gmail.com',
            'from' => 'Persona UMKM',
            'otp' => $user->otp,
        ];

        Mail::send('pages.sendmail', $mail, function($message) use ($mail){ 
            $message->to($mail['to']) 
            ->from($mail['email'], $mail['from']) 
            ->subject($mail['subject']); 
        });

        Alert::success('Succes', 'Kode Otp Dikirim Ke Email Anda');
        return redirect('/umkm/otp/'.$user->id);

    }

    public function otp($id) {
        $user = User::find($id);
        return view('NewPages.Otp', compact('user'));
    }

    public function otpresent($id){
        $otp = rand(100000,999999);
        $user = User::find($id);
        $user->otp = $otp;
        $user->save();

        $mail = [
            'subject' => 'Otp Code',
            'to' => $user->email,
            'email' => 'personaumkm@gmail.com',
            'from' => 'Persona UMKM',
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

    public function registerselect(){
        return view('NewPages.register-select');
    }

    public function marketerregister(){
        return view('NewPages.register-marketer');
    }

    public function marketerpostregister(Request $request){
        // dd($request);
        $this->validate($request,[
            'email' => 'required|email|unique:users,email',
            'name' => 'required',
            'no_telp' => 'required',
            'password' => 'required|min:8',
            'cv' => 'required|file|mimes:png,jpg,jpeg,csv,txt,xlx,xls,xlsx,pdf,doc,docx,ppt,pptx',
            'portofolio' => 'required|file|mimes:png,jpg,jpeg,csv,txt,xlx,xls,xlsx,pdf,doc,docx,ppt,pptx',
            'link_portofolio_1' => 'required',
        ],[
            'email' => 'Input Your Email',
            'email.email' => 'Must Be Email',
            'name' => 'Input Your Username',
            'no_telp' => 'Input Your Number Phone',
            'password' => 'Input Your Password',
            'password.min' => 'Password Must Be 8 Character',
            'portofolio' => 'Upload Your Portofolio',
            'portofolio.mimes' => 'File Must Be png,jpg,jpeg,csv,txt,xlx,xls,xlsx,pdf,doc,docx,ppt,pptx',
            'cv' => 'Upload Your CV',
            'cv.mimes' => 'File Must Be png,jpg,jpeg,csv,txt,xlx,xls,xlsx,pdf,doc,docx,ppt,pptx',
            'link_portofolio_1' => 'Input Your Portofiolio',
        ]);

        $otp = rand(100000,999999);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->no_telp = $request->no_telp;
        $user->password = bcrypt($request->password);
        $user->otp = $otp;
        $user->role = 4;
        $user->status = 1;
        $user->verification = 'unverified';

        $user->save();

        $newMarketer = new Marketer();
        $newMarketer->user_id = $user->id;
        $newMarketer->link_portofolio_1 = $request->link_portofolio_1;
        if($request->hasFile('cv') && $request->hasFile('portofolio'))
        {
            $fileCV = 'CV '.$request->name.'.'.$request->cv->getClientOriginalExtension();
            $request->file('cv')->move(public_path().'/file/', $fileCV);
            $newMarketer->cv = $fileCV;

            $fileportofolio = 'Porto '.$request->name.'.'.$request->portofolio->getClientOriginalExtension();
            $request->file('portofolio')->move(public_path().'/file/', $fileportofolio);
            $newMarketer->portofolio = $fileportofolio;
            
            $newMarketer->save();
        }
        if($request->link_portofolio_2){
            $newMarketer->link_portofolio_2 = $request->link_portofolio_2;
            $newMarketer->save();
        }
        if($request->link_portofolio_3){
            $newMarketer->link_portofolio_3 = $request->link_portofolio_3;
            $newMarketer->save();
        }
        $newMarketer->save();

        $mail = [
            'subject' => 'Otp Code',
            'to' => $user->email,
            'email' => 'personaumkm@gmail.com',
            'from' => 'Persona UMKM',
            'otp' => $user->otp,
        ];

        Mail::send('pages.sendmail', $mail, function($message) use ($mail){ 
            $message->to($mail['to']) 
            ->from($mail['email'], $mail['from']) 
            ->subject($mail['subject']); 
        });

        Alert::success('Succes', 'Kode Otp Dikirim Ke Email Anda');
        return redirect('/marketer/otp/'.$user->id);

    }

    public function marketerotp($id){
        $user = User::find($id);
        return view('NewPages.otp-marketer', compact('user'));
    }

    public function marketerotpsubmit(Request $request, $id){
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

    public function marketerotpresent($id){
        $otp = rand(100000,999999);
        $user = User::find($id);
        $user->otp = $otp;
        $user->save();

        $mail = [
            'subject' => 'Otp Code',
            'to' => $user->email,
            'email' => 'personaumkm@gmail.com',
            'from' => 'Persona UMKM',
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
}
