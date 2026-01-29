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
 // Trang nhập tuổi
    public function enterAge()
    {
        return view('age.enter-age');
    }

    // Trang xác nhận
    public function confirmAge(Request $request)
    {
        $request->validate([
            'age' => 'required|integer|min:1'
        ]);

        return view('age.confirm', [
            'age' => $request->age
        ]);
    }

    // Lưu tuổi vào session
    public function saveAge(Request $request)
    {
        session()->push('ages', $request->age);

        return redirect()->route('age.list');
    }

    // Danh sách tuổi
    public function ageList()
    {
        $ages = session('ages', []);
        return view('age.list', compact('ages'));
    }
 

}




