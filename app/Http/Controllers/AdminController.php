<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(){
        return view('new.admin.authentications.login');
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

        if (Auth::guard('web')->attempt($credentials)) {
            $user = Auth::user();

            if ($user->status == 1) {
                return redirect()->route('admin.dashboard');
            } else {
                Auth::guard('web')->logout();
                return redirect()->route('admin.login')->with('error', 'Your account has been deactivated. Please contact support for assistance.');
            }
        } else {
            return back()->with('error', 'The email or password you entered is incorrect. Please try again.');
        }

    }

    public function logout() {
        Auth::guard('web')->logout();

        return redirect()->route('admin.login')->with('success', 'You have been successfully logged out.');
    }
}
