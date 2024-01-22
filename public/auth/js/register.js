document.addEventListener("DOMContentLoaded", function () {
    var passwordInput = document.getElementById("password-input");
    var confirmPasswordInput = document.getElementById(
        "confirm-password-input"
    );

    var passwordIcon = document.getElementById("password-icon");
    var confirmPasswordIcon = document.getElementById("confirm-password-icon");

    passwordIcon.addEventListener("click", function () {
        togglePasswordVisibility(passwordInput, passwordIcon);
    });

    confirmPasswordIcon.addEventListener("click", function () {
        togglePasswordVisibility(confirmPasswordInput, confirmPasswordIcon);
    });

    function togglePasswordVisibility(input, icon) {
        if (input.type === "password") {
            input.type = "text";
            icon.src = "/images/icon_image/icon-hide-password2.svg";
        } else {
            input.type = "password";
            icon.src = "/images/icon_image/icon-view-password.svg";
        }
    }
});

function validateFormRegister() {
    var fullname = document.getElementById("fullname-input").value.trim();
    var email = document.getElementById("email-input").value.trim();
    var sdt = document.getElementById("sdt-input").value.trim();
    var password = document.getElementById("password-input").value.trim();
    var confirmPassword = document
        .getElementById("confirm-password-input")
        .value.trim();

    var fullnameError = document.getElementById("fullname-error");
    var emailError = document.getElementById("email-error");
    var sdtError = document.getElementById("sdt-error");
    var passwordError = document.getElementById("password-error");
    var confirmPasswordError = document.getElementById(
        "confirm-password-error"
    );

    fullnameError.textContent = "";
    emailError.textContent = "";
    sdtError.textContent = "";
    passwordError.textContent = "";
    confirmPasswordError.textContent = "";

    if (fullname === "") {
        fullnameError.textContent = "Họ và tên không được để trống.";
    }

    if (sdt === "") {
        sdtError.textContent = "Số điện thoại không được để trống.";
    } else if (!/^0\d{9}$/.test(sdt)) {
        sdtError.textContent = "Số điện thoại không hợp lệ.";
    }

    if (password === "") {
        passwordError.textContent = "Mật khẩu không được để trống.";
    }

    if (confirmPassword === "") {
        confirmPasswordError.textContent =
            "Xác nhận mật khẩu không được để trống.";
    } else if (password !== confirmPassword) {
        confirmPasswordError.textContent = "Xác nhận mật khẩu không khớp.";
    }

    var hasError =
        fullnameError.textContent ||
        emailError.textContent ||
        sdtError.textContent ||
        passwordError.textContent ||
        confirmPasswordError.textContent;
    if (!hasError) {
        showSuccessMessage();
    }
    return !hasError;
}

function showSuccessMessage() {
    var successMessage =
        "Chúc mừng bạn đã đăng ký thành công! Vui lòng kiểm tra email để kích hoạt.";
    alert(successMessage);
}
