// slide ảnh

let slideIndex = 1;
if (typeof document !== "undefined") {
    showSlides(slideIndex);
}

function showSlides(n, document) {
    let i;
    let doc =
        document ||
        (typeof window !== "undefined" ? window.document : undefined);
    if (!doc) {
        throw new Error("No document available");
    }
    let slides = doc.getElementsByClassName("mySlides");
    let dots = doc.getElementsByClassName("demo");
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

module.exports = showSlides;
