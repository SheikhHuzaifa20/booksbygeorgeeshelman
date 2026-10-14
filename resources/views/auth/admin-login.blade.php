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

            <p class="auth-eyebrow">ADMINISTRATION</p>
            <h1 id="login-title">Admin sign in</h1>
            <p class="auth-description">Sign in to manage your website.</p>

            @if ($errors->any())
                <div class="auth-error" role="alert">{{ $errors->first() }}</div>
            @endif

            <form method="POST" action="{{ route('admin.login.store') }}" class="auth-form">
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

            <a class="auth-back" href="{{ url('/') }}">Back to website</a>
        </section>
    </main>
@endsection
