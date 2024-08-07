<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request){
        $query = User::where('role', 3)->where('status', 1);

        if ($request->has('search') && !empty($request->input('search'))) {
            $search = $request->input('search');
            $query = $query->where(function($q) use ($search) {
                $q->where('name', 'LIKE', "%{$search}%")
                ->orWhere('email', 'LIKE', "%{$search}%");
            });
        }

        $users = $query->paginate(10);
        return view('pages.user.index', compact(
            'users',
        ));
    }
}
