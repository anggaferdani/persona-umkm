<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MarketerController extends Controller
{
    public function index(Request $request){
        $query = User::where('role', 4)->where('status', 1);

        if ($request->has('search') && !empty($request->input('search'))) {
            $search = $request->input('search');
            $query = $query->where(function($q) use ($search) {
                $q->where('name', 'LIKE', "%{$search}%")
                ->orWhere('email', 'LIKE', "%{$search}%");
            });
        }

        $marketers = $query->paginate(10);
        return view('pages.marketer.index', compact(
            'marketers',
        ));
    }
}
