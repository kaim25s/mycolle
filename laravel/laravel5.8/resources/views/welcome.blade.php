<!-- resources/views/welcome.blade.php -->

@extends('layouts.app')

@section('title', 'トップページ')

@section('content')
    <h2>トップ<p>ここにトップページのコンテンツを置きます。</p>ページのコンテンツ</h2>
    <script src="{{ asset('/js/ground.js') }}"></script>
@endsection

<canvas id="canvas"></canvas>