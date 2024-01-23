document.addEventListener("DOMContentLoaded", function () {
    var copyButtons = document.querySelectorAll(".voucher-coppy");
    copyButtons.forEach(function (button) {
        button.addEventListener("click", function () {
            var codeToCopy = this.getAttribute("data-code");
            if (navigator.clipboard) {
                navigator.clipboard
                    .writeText(codeToCopy)
                    .then(function () {
                        alert(
                            "Coppy mã giảm giá thành công, áp dụng mã ở phần thanh toán !"
                        );
                    })
                    .catch(function (error) {
                        console.error("Lỗi khi sao chép mã:", error);
                    });
            }
        });
    });
});
