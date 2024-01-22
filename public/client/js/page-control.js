document.addEventListener("DOMContentLoaded", function () {
    var paginationLinks = document.querySelectorAll(".pagination-link");

    paginationLinks.forEach(function (link) {
        link.addEventListener("click", function (event) {
            event.preventDefault();
            paginationLinks.forEach(function (otherLink) {
                otherLink.classList.remove("active");
            });
            link.classList.add("active");
        });
    });
});
