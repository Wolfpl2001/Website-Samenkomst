@extends('layouts.auth')
@section('title', 'login')
@section('content')
<div class="login">

    <h1>Login</h1>

    <form action="{{ route('login.submit') }}" method="POST" class="form login-form">

        @csrf

        <label class="lblEmail" for="username">E-mail</label>
        <div class="form-group">
            <svg class="form-icon-left" width="14" height="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path
                    d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
            </svg>
            <input class="form-input" type="text" name="email" placeholder="Email" id="email" value="{{ old('email') }}"
                required>
        </div>

        <label class="lblPassword" for="password">Password</label>
        <div class="form-group mar-bot-5">
            <svg class="form-icon-left" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 448 512">
                <path
                    d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z" />
            </svg>
            <input class="form-input" type="password" name="password" placeholder="Password" id="password" required>
        </div>

        @if ($errors->any())
        <div class="msg error">
            @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
        </div>
        @endif

        <button class="btnSubmit" type="submit">Login</button>

    </form>

</div>
@endsection