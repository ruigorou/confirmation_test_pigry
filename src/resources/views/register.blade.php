@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection
@section('content')
    <form class="form" action="/register/step2" method="post">
        <div class="register-form">
            <div class="register-form__title">
                <h1>PiGLy</h1>
                <h2>新規会員登録</h2>
                <p>STEP1 アカウント情報登録</p>
            </div>
            <div class="register-form__group">
                <div>
                    <label>お名前</label>
                    
                </div>
                <div>
                    <input type="text" name="name" placeholder="お名前入力">
                </div>
            </div>
            <div class="form__error">
                @foreach($errors->get('name') as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
            <div class="register-form__group">
                <div>
                    <label>メールアドレス</label>
                    
                </div>
                <div>
                    <input type="email" name="email" placeholder="メールアドレスを入力">
                </div>
            </div>
            <div class="form__error">
                @foreach($errors->get('email') as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
            <div class="register-form__group">
                <div>
                    <label for="">パスワード</label>
                    
                </div>
                <div>
                    <input type="text" name="password" placeholder="パスワードを入力">
                </div>
            </div>
            <div class="form__error">
                @foreach($errors->get('password') as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
            <div class="register-form__btn">
                <button type="submit">次に進む</button>
            </div>
            <div class="register-form__link">
                <a href="/">ログインはこちら</a>
            </div>
        </div>
    </form>
    
@endsection