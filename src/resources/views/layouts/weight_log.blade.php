<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PigLy</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/weight_log.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    @yield('css')
</head>
<body>
    <header class="header">
        <div>
            <h1 class="header__title">PigLy</h1>
        </div>
        <div class="header__contents">
            <div class="header__target-weight">
                <a href=""><span><i class="fa-solid fa-gear"></i></span>目標体重設定</a>
            </div>
            <div class="header__logout">
                <a href="/login"><span><i class="fa-solid fa-door-open"></i>
</span>ログアウト</a>
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>