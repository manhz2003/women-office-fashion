document.addEventListener("DOMContentLoaded", function () {
    var topBtn = document.querySelector(".top");

    // Thêm sự kiện cuộn
    window.addEventListener("scroll", function () {
        // Kiểm tra vị trí cuộn
        if (window.scrollY > 200) {
            topBtn.style.display = "block";
        } else {
            topBtn.style.display = "none";
        }

        // Kiểm tra khi đã cuộn lên top
        if (window.scrollY === 0) {
            topBtn.style.display = "none";
        }
    });

    // Thêm sự kiện click
    topBtn.addEventListener("click", function () {
        // Cuộn từ từ lên top trong khoảng thời gian 500ms
        window.scrollTo({
            top: 0,
            behavior: "smooth",
        });
    });
});
