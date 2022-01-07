<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function AdminLogin()
    {
        return redirect()->route('main')->with('msg','dang nhap thanh cong');
    }
}
