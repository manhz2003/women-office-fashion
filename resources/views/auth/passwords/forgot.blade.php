@extends('client.layouts.master')

@section('title', 'Quên mật khẩu')

@section('main')
    <div class="password-app">
        <div class="password-form">
            <form action="{{ url('/forgot') }}" method="post" onsubmit="showSuccessAlert()">
                @csrf
                <h1>
                    Quên mật khẩu?
                </h1>
                <p>
                    Vui lòng cung cấp email đăng nhập để lấy lại mật khẩu.
                </p>
                <div class="password-email">
                    <input type="email" name="email" required>
                </div>
                <div class="password-btn">
                    <button type="submit">Gửi</button>
                </div>
            </form>
        </div>
        <script src="{{ asset('auth/js/forgot.js') }}"></script>
    </div>

@endsection
