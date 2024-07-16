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

// http://127.0.0.1:8000/testに接続したときに、TestControllerのindexが実行されます。
Route::get('/test', 'App\Http\Controllers\TestController@index');


use App\Http\Controllers\ContactController;

// コンタクトフォームのデータ送信を処理するルート
Route::post('/contact', [ContactController::class, 'store']);