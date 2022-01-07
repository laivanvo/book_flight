<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class laivanvoController extends Controller
{
    public function login(Request $request)
    {
        $count=DB::table('users')
        ->where('email','=',$request->email)
        ->where('password','=',$request->password)
        ->get()
        ->count();
        if($count)
        {
            return redirect()->route('client');
        }
        else{
            return back()->with('successMsg','Property is updated .');
        }
    }
    public function register(Request $request)
    {
        User::create($request->all());
        return redirect()->route('client');
    }
}
