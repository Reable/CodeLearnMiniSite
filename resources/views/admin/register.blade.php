@extends('layout')

@section('title_name')
    Регистрация
@endsection

@section('main')
    <div class="authorization">
        <div class="container">
            <h1>Рагистрация в профиле</h1>
            <form enctype="multipart/form-data" action="{{ route('register') }}" method="POST">
                {{ csrf_field() }}

                <p class="error">{{ $errors->register->first('image') }}</p>
                <input type="file" name="image">

                <p class="error">{{ $errors->register->first('login') }}</p>
                <input type="text" name="login" placeholder="Ваш логин">

                <p class="error">{{ $errors->register->first('name') }}</p>
                <input type="text" name="name" placeholder="Ваше имя">

                <p class="error">{{ $errors->register->first('surname') }}</p>
                <input type="text" name="surname" placeholder="Ваша фамилия">

                <p class="error">{{ $errors->register->first('password') }}</p>
                <input type="password" name="password" placeholder="Ваш пароль">

                <input type="submit" value="Авторизироваться">
            </form>
        </div>
    </div>
@endsection
