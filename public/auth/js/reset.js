function validateForm() {
    var newPassword = document.getElementById("new_password").value;
    var confirmNewPassword = document.getElementById(
        "confirm_new_password"
    ).value;

    if (newPassword !== confirmNewPassword) {
        alert("Mật khẩu nhập lại không khớp!");
        return false;
    }

    var success = confirm(
        "Bạn có chắc chắn muốn đổi mật khẩu ? nhấn ok để tiếp tục"
    );

    if (success) {
        // Thực hiện submit form
        document.getElementById("your_form_id").submit();
    }

    return false;
}
