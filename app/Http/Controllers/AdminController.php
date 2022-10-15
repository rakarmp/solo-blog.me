<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {

        return view('/admin/index');
    }

    public function login() {
        return view('/auth/login');
    }
    
    public function pindah() {
        return view('/auth/register');
    }
    
}
