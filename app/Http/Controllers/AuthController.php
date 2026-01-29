<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Trả về view SignIn
    public function signIn()
    {
        return view('auth.signin');
    }

    // Xử lý dữ liệu form
    public function checkSignIn(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $repass   = $request->repass;
        $mssv     = $request->mssv;
        $lop      = $request->lopmonhoc;
        $gioitinh = $request->gioitinh;

        // Dữ liệu mẫu theo đề
        if (
            $username === 'Marada' &&
            $password === '123abc' &&
            $repass === '123abc' &&
            $mssv === '26867' &&
            $lop === '67PM1' &&
            $gioitinh === 'nu'
        ) {
            return "Đăng ký thành công!";
        }

        return "Đăng ký thất bại";
    }
}
