document.addEventListener("DOMContentLoaded", function () {
    var bannerImages = document.querySelectorAll(".banner-img img");
    var dots = document.querySelectorAll(".dot-circle");
    var dotItems = document.querySelectorAll(".slick-dot-item");
    var currentImageIndex = 0;

    bannerImages[currentImageIndex].style.display = "block";
    dots[currentImageIndex].classList.add("active");
    dotItems[currentImageIndex].classList.add("border-dot");

    dots.forEach(function (dot, index) {
        dot.addEventListener("click", function () {
            bannerImages[currentImageIndex].style.display = "none";
            dotItems[currentImageIndex].classList.remove("border-dot");

            currentImageIndex = index;

            bannerImages[currentImageIndex].style.display = "block";

            dotItems.forEach(function (dotItem) {
                dotItem.classList.remove("border-dot");
            });

            dotItems[currentImageIndex].classList.add("border-dot");

            dots.forEach(function (dot) {
                dot.classList.remove("active");
            });

            this.classList.add("active");
        });
    });
});
