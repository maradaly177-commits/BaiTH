<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');


Route::prefix('product')->group(function () {

    Route::get('/', function () {
        return view('product.index');
    })->name('product.index');

    Route::get('/add', function () {
        return view('product.add');
    })->name('product.add');

    Route::get('/product/{id}', function ($id) {
    return view('product.detail', compact('id'));
    })->name('product.detail');

    Route::get('/{id?}', function ($id = '123') {
        return "Product ID: " . $id;
    })->where('id', '.*')->name('product.detail');
});


Route::get('/sinhvien/{name?}/{mssv?}', function (
    $name = 'LY MARADA',
    $mssv = '5001467'
) {
    return "
        <h2>Thông tin sinh viên</h2>
        <p>Họ tên: $name</p>
        <p>MSSV: $mssv</p>
    ";
});


Route::get('/banco/{n}', function ($n) {
    return view('banco', compact('n'));
});


Route::fallback(function () {
    return response()->view('error.404', [], 404);
});
