@extends('layouts.login')

@section('css')
    <link href="{{ asset('assets/css/auth-login.css') }}" rel="stylesheet">
@endsection

@section('content')
    <main class="auth-page">
        <section class="auth-panel" aria-labelledby="login-title">
            <a class="auth-brand" href="{{ url('/') }}" aria-label="{{ config('app.name') }} home">
                @if (!empty($logo->img_path))
                    <img src="{{ asset($logo->img_path) }}" alt="">
                @endif
                <span>{{ config('app.name') }}</span>
            </a>

            <p class="auth-eyebrow">YOUR ACCOUNT</p>
            <h1 id="login-title">Sign in</h1>
            <p class="auth-description">Enter your account details to continue.</p>

            @if ($errors->any())
                <div class="auth-error" role="alert">{{ $errors->first() }}</div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="auth-form">
                @csrf
                <div class="auth-field">
                    <label for="email">Email address</label>
                    <input id="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email"
                        name="email" value="{{ old('email') }}" autocomplete="username" required autofocus>
                </div>

                <div class="auth-field">
                    <label for="password">Password</label>
                    <input id="password" class="{{ $errors->has('password') ? 'is-invalid' : '' }}" type="password"
                        name="password" autocomplete="current-password" required>
                </div>

                <button class="auth-submit" type="submit">Sign in</button>
            </form>

            <a class="auth-back" href="{{ route('admin.login') }}">Admin sign in</a>
        </section>
    </main>
@endsection
