<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user = User::where('role', 3)->get();
        return view('pages.user.index', compact('user'));
    }
    public function indexmarketer(){
        $user = User::where('role', 4)->get();
        return view('pages.user.marketer', compact('user'));
    }
}
