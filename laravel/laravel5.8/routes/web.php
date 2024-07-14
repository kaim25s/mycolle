<?php

// トップページ
Route::get('/', function () {
    return view('welcome');
});

// 会社紹介ページ
Route::get('/about', function () {
    return view('about');
});

// コンタクトフォームページ
Route::get('/contact', function () {
    return view('contact');
});


use App\Http\Controllers\ContactController;

// コンタクトフォームのデータ送信を処理するルート
Route::post('/contact', [ContactController::class, 'store']);