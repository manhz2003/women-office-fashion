// testjs.test.js
const changeQuantity = require("../public/client/js/cart");

describe("changeQuantity", () => {
    it("should increase quantity", () => {
        const newQuantity = changeQuantity(5, 10);
        expect(newQuantity).toBe(15);
    });

    it("should decrease quantity", () => {
        const newQuantity = changeQuantity(-5, 10);
        expect(newQuantity).toBe(5);
    });

    it("should not decrease quantity below 1", () => {
        const newQuantity = changeQuantity(-12, 10);
        expect(newQuantity).toBe(1);
    });

    it("should not increase quantity above 200", () => {
        const newQuantity = changeQuantity(5, 200);
        expect(newQuantity).toBe(200);
    });

    it("should not change quantity when amount is not a number", () => {
        const newQuantity = changeQuantity("invalid", 10);
        expect(newQuantity).toBe(10);
    });
});
