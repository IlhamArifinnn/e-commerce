<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function userManagement()
    {
        $users = \App\Models\User::all();
        return view('admin.index', compact('users'));
    }
}