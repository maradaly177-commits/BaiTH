<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function login()
    {
        return view('product.login');
    }
    public function register()
    {
        return view('product.register');
    }
    public function postLogin(Request $request)
    {
        return "Đã submit form login";
    }
    public function postRegister(Request $request)
    {
        return "Đã submit form register";
    }
}
