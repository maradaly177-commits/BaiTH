<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AgeController;


Route::prefix('product')->group(function () {

    Route::get('/', function () {
        return view('product.index');
    })->name('product.index');

    Route::get('/add', function () {
        return view('product.add');
    })->name('product.add');

    Route::get('/{id}', function ($id) {
        return view('product.detail', compact('id'));
    })->name('product.detail');
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

Route::get('/login', [ProductController::class, 'login']);
Route::post('/login', [ProductController::class, 'postLogin']);

Route::get('/register', [ProductController::class, 'register']);
Route::post('/register', [ProductController::class, 'postRegister']);


Route::get('/enter-age', [AgeController::class, 'enterAge'])
    ->name('age.enter');

Route::post('/age/confirm', [AgeController::class, 'confirm'])
    ->name('age.confirm');

Route::post('/save-age', [AgeController::class, 'saveAge'])
    ->name('age.save');

Route::get('/age-list', [AgeController::class, 'list'])
    ->name('age.list');

Route::get('/tre_em', function () {
    return view('age.tre_em');
})->name('age.tre_em');

Route::get('/protected', [AgeController::class, 'protectedPage'])
    ->middleware('check.age');


Route::get('/signin', [AuthController::class, 'signIn'])
    ->name('signin');

Route::post('/signin', [AuthController::class, 'checkSignIn'])
    ->name('signin.check');


Route::get('/', function () {
    return view('home'); 
})->name('home');


Route::fallback(function () {
    return response()->view('error.404', [], 404);
});


Route::get('/products', [ProductController::class, 'index']);

Route::get('/product/list', [ProductController::class, 'index'])
    ->name('product.list');

Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');


