function convertAmount(){
    const Quantity = document.getElementById("Quantity").value;
    const Price = document.getElementById("Price");
    const Credit = document.getElementById("Credit");
    Credit.value = Quantity
    Price.innerHTML = numberDecimal(Quantity);

}

function numberDecimal(Quantity) {
    return Quantity.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
