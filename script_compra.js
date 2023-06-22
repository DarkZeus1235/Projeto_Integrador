if (document.readyState = "loading"){
    document.addEventListener("DOMContentLoaded",ready);
}else{
    ready()
}
// Início do script para escolher o método de pagamento

var TotalPrice = "0,00";
function ready(){
    const choosePixPayment = document.getElementsByClassName("text-pedi-pix");
    for(var i = 0; i < choosePixPayment.length; i++){
        choosePixPayment[i].addEventListener("click", function(event){
           alert("Pagamento realizado com PIX!")
        })
    }
    const chooseVisaPayment = document.getElementsByClassName("text-pedi-visa");
    for(var i = 0; i < chooseVisaPayment.length; i++){
        chooseVisaPayment[i].addEventListener("click", function(PaymentVisa){
            alert("Pagamento realizado com VISA!")
        })
    }
    const chooseMasterPayment = document.getElementsByClassName("text-pedi-master");
    for(var i = 0; i < chooseMasterPayment.length; i++){
        chooseMasterPayment[i].addEventListener("click", function(event){
            alert("Pagamento realizado com MasterCard!")
        })
    }
    const chooseTicketPayment = document.getElementsByClassName("text-pedi-boleto");
    for(var i = 0; i < chooseTicketPayment.length; i++){
        chooseTicketPayment[i].addEventListener("click", function(event){
            alert("Pagamento realizado com boleto!")
        })
    }
}
const changePrice = document.getElementsByClassName("span-comp-price");
for(var i = 0; i < changePrice.length; i++){
    changePrice[i].addEventListener("click", PaymentVisa())
}
function PaymentVisa(){
    chooseVisaPayment[i].addEventListener("click", function(event){
        TotalPrice = TotalPrice + 9,99;
    })
    
}