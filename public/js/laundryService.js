function convertAmount(prices=0){
    const Quantity = document.getElementById("Quantity").value;
    const Price = document.getElementById("Price");
    const Credit = document.getElementById("Credit");
    let multiplier = ""


    if(prices === 0){
        multiplier = 1
    }else{
        prices.forEach((value, index) => {
            if(Quantity >= prices[index]['min'] && Quantity <=  prices[index]['max']){
                multiplier = prices[index]['multiplier']
                document.querySelector('#payment').disabled = false;
            }else{
                document.querySelector('#payment').disabled = true;
            }
        });
    }
    Credit.value  = Quantity
    Price.innerHTML = numberDecimal(Quantity * multiplier);
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
