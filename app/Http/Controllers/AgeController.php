<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgeController extends Controller
{
    // Hiển thị form nhập tuổi
    public function enterAge()
    {
        return view('age.enter-age');
    }

    // Lưu tuổi vào session
    public function saveAge(Request $request)
    {
        $request->validate([
            'age' => 'required|integer|min:1'
        ]);

        $request->session()->put('age', $request->age);

        return redirect()->route('age.confirm');
    }

    // Trang xác nhận tuổi
    public function confirm(Request $request)
    {
        $age = $request->session()->get('age');

        if (!$age) {
            return redirect()->route('age.enter');
        }

        return view('age.confirm', compact('age'));
    }
    public function list(Request $request)
{
    $ages = $request->session()->get('ages');

    // Nếu chưa có tuổi nào → quay về trang nhập
    if (!$ages || count($ages) == 0) {
        return redirect()->route('age.enter');
    }

    return view('age.list', compact('ages'));
}

}
