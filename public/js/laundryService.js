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

function switchBuy(){
    if(document.getElementById("chkBuy").checked){
        document.getElementsByClassName('compra')[0].style.display = "none"
        document.getElementsByClassName('compra-avulsa')[0].style.display = "block"
    }else{
        document.getElementsByClassName('compra')[0].style.display = "block"
        document.getElementsByClassName('compra-avulsa')[0].style.display = "none"
    }
}

function listUser(input){
    $(".userData").val(input.value).change();
}
