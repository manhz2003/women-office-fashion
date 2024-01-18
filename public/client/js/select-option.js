document.addEventListener("DOMContentLoaded", function () {
    var sortSelect = document.getElementById("sortSelect");

    sortSelect.addEventListener("change", function () {
        var selectedValue = sortSelect.value;

        // Thực hiện hành động tương ứng với giá trị được chọn
        if (selectedValue === "desc") {
            // Gọi hàm hoặc thực hiện chức năng sắp xếp từ cao đến thấp
            alert("Sắp xếp giảm dần");
        } else if (selectedValue === "asc") {
            // Gọi hàm hoặc thực hiện chức năng sắp xếp từ thấp đến cao
            alert("Sắp xếp tăng dần");
        }
    });
});
