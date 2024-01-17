document.addEventListener("DOMContentLoaded", function () {
    var heartWhites = document.querySelectorAll(".heart-white");

    heartWhites.forEach(function (heartWhite, index) {
        var isLiked =
            localStorage.getItem("isLiked_" + index) === "true" || false;
        setHeartImage(heartWhite, isLiked);

        heartWhite.addEventListener("click", function () {
            isLiked = !isLiked;
            localStorage.setItem("isLiked_" + index, isLiked);
            setHeartImage(heartWhite, isLiked);
        });
    });

    function setHeartImage(heartWhite, isLiked) {
        heartWhite.classList.toggle("liked", isLiked);

        if (isLiked) {
            heartWhite.src = "/images/icon_image/icon-heart-red.svg";
        } else {
            heartWhite.src = "/images/icon_image/icon-heart-white.svg";
        }
    }
});

document.addEventListener("DOMContentLoaded", function () {
    var iconItems = document.querySelectorAll(".icon-item-img");

    iconItems.forEach(function (iconItem) {
        iconItem.addEventListener("click", function () {
            iconItems.forEach(function (item) {
                item.classList.remove("icon-color-border");
            });
            iconItem.classList.add("icon-color-border");
        });
    });
});
