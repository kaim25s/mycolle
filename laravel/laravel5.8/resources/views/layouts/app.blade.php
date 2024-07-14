<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>アプリケーション名 - @yield('title')</title>
</head>
<body>
    <header>
        <h1>共通ヘッダー</h1>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">トップページ</a></li>
                <li><a href="{{ url('/about') }}">会社概要</a></li>
                <li><a href="{{ url('/contact') }}">コンタクトフォーム</a></li>
            </ul>
         </nav>
    </header>

    //コンタクトフォームからの遷移先
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>

    <footer>
        <p>共通フッター</p>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">トップページ</a></li>
                <li><a href="{{ url('/about') }}">会社概要</a></li>
                <li><a href="{{ url('/contact') }}">コンタクトフォーム</a></li>
            </ul>

        </nav>
    </footer>
</body>
</html>