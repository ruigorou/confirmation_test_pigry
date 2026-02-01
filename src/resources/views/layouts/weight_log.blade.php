<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PigLy</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/weight_log.css') }}">
    @yield('css')
</head>
<body>
    <header class="header">
        <div>
            <h1 class="header__title">PigLy</h1>
        </div>
        <div class="header__contents">
            <div class="header__target-weight">
                <a href="">目標体重設定</a>
            </div>
            <div class="header__logout">
                <a href="/login">ログアウト</a>
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>