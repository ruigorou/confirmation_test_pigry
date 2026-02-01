@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection
@section('content')
    <form class="form" action="/login" method="post">
        @csrf
        <div class="login-form">
            <div class="login-form__title">
                <h1>PiGLy</h1>
                <h2>ログイン</h2>
            </div>
            <div class="login-form__group">
                <div>
                    <label>メールアドレス</label>
                    
                </div>
                <div>
                    <input type="text" name="email" placeholder="メールアドレスを入力" value="{{ old('email') }}">
                </div>
            </div>
            <div class="form__error">
                @foreach($errors->get('email') as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
            <div class="login-form__group">
                <div>
                    <label>パスワード</label>
                    
                </div>
                <div>
                    <input type="password" name="password" placeholder="パスワードを入力" value="">
                </div>
            </div>
            <div class="form__error">
                @if($errors->has('password'))
                    <div class="error">{{ $errors->first('password') }}</div>
                @endif
            </div>
            <div class="login-form__btn">
                <button type="submit">ログイン</button>
            </div>
            <div class="login-form__link">
                <a href="/register/step1">アカウント作成はこちら</a>
            </div>
        </div>
    </form>
    
@endsection