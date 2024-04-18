// cart.js
function changeQuantity(amount, currentQuantity) {
    if (typeof amount !== "number") {
        return currentQuantity;
    }
    var newQuantity = currentQuantity + amount;
    if (newQuantity < 1) {
        newQuantity = 1;
    } else if (newQuantity > 200) {
        newQuantity = 200;
    }
    return newQuantity;
}

module.exports = changeQuantity;
