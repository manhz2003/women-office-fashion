<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lấy Lại Mật Khẩu</title>
    <style>
        .forgot-app p {
            color: #000;
        }
    </style>
</head>

<body>
    <div class="forgot-app">
        <p><b>Yêu cầu cấp lại mật khẩu.</b></p>
        <p>Kính gửi khách hàng, bạn đã có yêu cầu thay đổi mật khẩu website women's fashion.</p>
        <p>Hãy đảm bảo rằng bạn giữ mật khẩu này an toàn và không chia sẻ nó với bất kỳ ai. <br>
            Nếu bạn không thực hiện yêu cầu này, vui lòng bỏ qua email này.</p>
        <p>
            Mật khẩu của bạn là: <span><b style="color: red">{{ $currentPassword }}</b></span>
        </p>
        <p>Trân trọng cảm ơn !<br>Women Office Fashion</p>
    </div>
</body>

</html>
