if (document.readyState = "loading"){
    document.addEventListener("DOMContentLoaded",ProductsBuying);
}else{
    ProductsBuying()
}
// Início do script para adicionar os produtos comprados

var TotalPrice = "0,00"
function ProductsBuying(){
    const totalProducts = document.querySelector(".table-purchase-head");
    console.log(TotalPrice);
    updateTotal();
}
/*
function updateTotal(){
    TotalPrice = 0;
    const purchaseProducts = document.getElementsByClassName("product-purchase");
    for(var i = 0; i < purchaseProducts.length; i++){
        console.log(purchaseProducts[i]);
        const productPrice = purchaseProducts[i].getElementsByClassName("purchase-product-price")[0].innerText.replace("R$", "").replace(",", ".");
        const productQuantity = purchaseProducts[i].getElementsByClassName("purchase-qtd-product")[0].value;
        const productPayment = purchaseProducts[i].getElementsByClassName("purchase-payment-type")[0].innerText;
    
        TotalPrice  = TotalPrice + (productPrice * productQuantity + 9,99);
    }
}
(APRESENTA UM ERRO NA LÓGICA QUE PRECISA SER REVISADO)*/

// Fim do script para adicionar os produtos