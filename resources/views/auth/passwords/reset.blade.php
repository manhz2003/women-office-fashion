@extends('client.layouts.master')

@section('main')
    <div class="reset-app">
        <div class="password-form-forgot">
            <form action="{{ route('reset') }}" method="post" onsubmit="return validateForm()">
                @csrf
                <h1>
                    Thay đổi mật khẩu
                </h1>
                <p>
                    Vui lòng nhập email và mật khẩu trước đó của bạn để thay đổi mật khẩu mới
                </p>
                <div class="password-email form-forgot-input">
                    <input placeholder="Email" type="email" name="email_or_phone" required>
                </div>
                <div class="password-email form-forgot-input">
                    <input placeholder="Mật khẩu cũ" type="password" name="password" required>
                </div>
                <div class="password-email form-forgot-input">
                    <input placeholder="Mật khẩu mới" type="password" name="new_password" id="new_password" required>
                </div>
                <div class="password-email form-forgot-input">
                    <input placeholder="Xác nhận mật khẩu mới" type="password" name="confirm_new_password"
                        id="confirm_new_password" required>
                </div>
                <div class="password-btn form-forgot-input">
                    <button type="submit">Gửi</button>
                </div>
            </form>

        </div>

        <script src="{{ asset('auth/js/reset.js') }}"></script>
    </div>
@endsection
