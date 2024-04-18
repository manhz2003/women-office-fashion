// testSlideShow.test.js
const { JSDOM } = require("jsdom");
const showSlides = require("../public/client/js/showSlides");

describe("showSlides", () => {
    let dom;
    let container;

    beforeEach(() => {
        dom = new JSDOM(`
            <!DOCTYPE html>
            <div class="mySlides" style="display: none;"></div>
            <div class="mySlides" style="display: none;"></div>
            <div class="demo"></div>
            <div class="demo"></div>
        `);
        container = dom.window.document;
    });

    it("should display the first slide and activate the first dot when n is 1", () => {
        showSlides(1, container);
        const slides = container.getElementsByClassName("mySlides");
        const dots = container.getElementsByClassName("demo");
        expect(slides[0].style.display).toBe("block");
        expect(dots[0].className).toContain("active");
    });

    it("should display the last slide and activate the last dot when n is less than 1", () => {
        showSlides(0, container);
        const slides = container.getElementsByClassName("mySlides");
        const dots = container.getElementsByClassName("demo");
        expect(slides[slides.length - 1].style.display).toBe("block");
        expect(dots[dots.length - 1].className).toContain("active");
    });

    it("should display the first slide and activate the first dot when n is greater than the number of slides", () => {
        showSlides(3, container);
        const slides = container.getElementsByClassName("mySlides");
        const dots = container.getElementsByClassName("demo");
        expect(slides[0].style.display).toBe("block");
        expect(dots[0].className).toContain("active");
    });
});
