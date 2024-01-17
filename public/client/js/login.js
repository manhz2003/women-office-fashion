// ẩn và hiện thị password
document.addEventListener("DOMContentLoaded", function () {
    var passwordInput = document.getElementById("password-input");
    var passwordIcon = document.querySelector(".password-icon");
    passwordIcon.addEventListener("click", function () {
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            passwordIcon.src = "/images/icon_image/icon-hide-password2.svg";
        } else {
            passwordInput.type = "password";
            passwordIcon.src = "/images/icon_image/icon-view-password.svg";
        }
    });
});

// check tên đăng nhập và mật khẩu
function validateForm() {
    var emailSdtInput = document.getElementById("email-sdt-input");
    var passwordInput = document.getElementById("password-input");
    var emailSdtError = document.getElementById("email-sdt-error");
    var passwordError = document.getElementById("password-error");

    emailSdtError.textContent = "";
    passwordError.textContent = "";
    var emailSdtValue = emailSdtInput.value.trim();
    var passwordValue = passwordInput.value.trim();

    var hasError = false;

    if (!emailSdtValue) {
        emailSdtError.textContent = "Email/Số điện thoại không được để trống.";
        hasError = true;
    } else if (
        !isValidEmail(emailSdtValue) &&
        !isValidPhoneNumber(emailSdtValue)
    ) {
        emailSdtError.textContent =
            "Email hoặc số điện thoại không đúng định dạng.";
        hasError = true;
    }

    if (!passwordValue) {
        passwordError.textContent = "Mật khẩu không được để trống.";
        hasError = true;
    }
    return !hasError;
}

function isValidEmail(email) {
    var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    return emailRegex.test(email);
}

function isValidPhoneNumber(phoneNumber) {
    var phoneNumberRegex = /^0\d{9}$/;
    return phoneNumberRegex.test(phoneNumber);
}
