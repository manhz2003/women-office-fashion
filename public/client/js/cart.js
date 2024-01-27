function changeQuantity(amount) {
    var quantityElement = document.getElementById("quantity");
    var currentQuantity = parseInt(quantityElement.innerText, 10);
    var newQuantity = currentQuantity + amount;
    if (newQuantity < 1) {
        newQuantity = 1;
    } else if (newQuantity > 200) {
        newQuantity = 200;
    }

    quantityElement.innerText = newQuantity.toString().padStart(2, "0");
}
