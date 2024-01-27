// color
document.addEventListener("DOMContentLoaded", function () {
    var iconItems = document.querySelectorAll(
        ".product-detail-color .color div"
    );

    iconItems.forEach(function (iconItem) {
        iconItem.addEventListener("click", function () {
            iconItems.forEach(function (item) {
                item.classList.remove("icon-color-border");
            });
            iconItem.classList.add("icon-color-border");
        });
    });
});

// size
document.addEventListener("DOMContentLoaded", function () {
    var iconItems = document.querySelectorAll(".product-detail-size .size div");
    iconItems.forEach(function (iconItem) {
        iconItem.addEventListener("click", function () {
            iconItems.forEach(function (item) {
                item.classList.remove("active-size");
            });
            iconItem.classList.add("active-size");
        });
    });
});

// tăng giảm số lượng
function changeQuantity(amount) {
    var quantityElement = document.getElementById("quantity");
    var currentQuantity = parseInt(quantityElement.innerText, 10);
    if (amount === -1 && currentQuantity > 1) {
        quantityElement.innerText = (currentQuantity + amount)
            .toString()
            .padStart(2, "0");
    } else if (amount === 1 && currentQuantity < 200) {
        quantityElement.innerText = (currentQuantity + amount)
            .toString()
            .padStart(2, "0");
    }
}

// chọn trái tim
document.addEventListener("DOMContentLoaded", function () {
    var heartIcon = document.getElementById("heartIcon");
    var isLiked = localStorage.getItem("isLiked") === "true" || false;
    setHeartImage(heartIcon, isLiked);
    heartIcon.addEventListener("click", function () {
        isLiked = !isLiked;
        localStorage.setItem("isLiked", isLiked);
        setHeartImage(heartIcon, isLiked);
    });

    function setHeartImage(heartIcon, isLiked) {
        heartIcon.classList.toggle("liked", isLiked);
        var iconPath = isLiked
            ? "/images/icon_image/icon-heart-black.svg"
            : "/images/icon_image/icon-heart-red.svg";
        heartIcon.querySelector("img").src = iconPath;
    }
});

// lấy kích thước
let selectedSize = "S";
function setSize(size) {
    selectedSize = size;
    document.getElementById("selectedSize").value = size;
}

// lấy màu sắc
let selectedColor = "Pink";
function setColor(color) {
    selectedColor = color;
    document.getElementById("selectedColor").value = color;
}

// lấy số lượng
let selectedQuantity = 1;

function changeQuantity(amount) {
    selectedQuantity += amount;
    selectedQuantity = Math.max(selectedQuantity, 1);
    selectedQuantity = Math.min(selectedQuantity, 200);
    document.getElementById("quantity").innerText = selectedQuantity
        .toString()
        .padStart(2, "0");
    document.getElementById("selectedQuantity").value = selectedQuantity;
}

// slide ảnh
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides((slideIndex += n));
}

function currentSlide(n) {
    showSlides((slideIndex = n));
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("demo");
    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}
