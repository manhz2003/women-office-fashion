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
