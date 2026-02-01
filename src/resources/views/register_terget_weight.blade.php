@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/register_target_weight.css') }}">
@endsection
@section('content')
    <form class="form" action="/register/step2" method="post">
        @csrf
        <div class="register-form">
            <div class="register-form__title">
                <h1>PiGLy</h1>
                <h2>新規会員登録</h2>
                <p>STEP2 体重データの登録</p>
            </div>
            <div class="register-form__group">
                <div>
                    <label>現在の体重</label>
                    
                </div>
                <div>
                    <input type="text" name="current_weight" placeholder="現在の体重を入力" value="{{ old('current_weight') }}"> kg
                </div>
            </div>
            <div class="form__error">
                @if($errors->has('current_weight'))
                    <div class="error">{{ $errors->first('current_weight') }}</div>
                @endif
            </div>
            <div class="register-form__group">
                <div>
                    <label>目標の体重</label>
                    
                </div>
                <div>
                    <input type="text" name="target_weight" placeholder="目標の体重を入力" value="{{ old('target_weight') }}"> kg
                </div>
            </div>
            <div class="form__error">
                @if($errors->has('target_weight'))
                    <div class="error">{{ $errors->first('target_weight') }}</div>
                @endif
            </div>
            <div class="register-form__btn">
                <button type="submit">アカウント作成</button>
            </div>
        </div>
    </form>
@endsection