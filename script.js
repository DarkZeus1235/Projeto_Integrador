if (document.readyState = "loading"){
    document.addEventListener("DOMContentLoaded",ready);
}else{
    ready()
}
function ready (){
const RemoveProductButtons = document.getElementsByClassName(".remove-product-button");
console.log(RemoveProductButtons);
for(var i = 0; i < RemoveProductButtons.length; i++){
    RemoveProductButtons[i].addEventListener("click", removeProduct)
}}
function removeProduct(event){
    event.target.parentElement.parentElement.remove();
    updateTotal();
}
const quantityInputs = document.getElementsByClassName("product-qtd-input")
    for (var i = 0; i < quantityInputs.length; i++){
        quantityInputs[i].addEventListener("change", updateTotal)
    }
const addToCartButtons = document.getElementsByClassName("button-hover-background")
for (var i = 0; addToCartButtons.length; i++){
    addToCartButtons[i].addEventListener("click", addProductToCart)
    console.log(button)
} 
function addProductToCart(event){
    const button = event.target
}
function updateTotal(){
let TotalAmount = 0;
const cartProducts = document.getElementsByClassName("cart-product");
for(var i = 0; i < cartProducts.length; i++){
    console.log(cartProducts[i]);
    const productPrice = cartProducts[i].getElementsByClassName("cart-product-price")[0].innerText.replace("R$", "").replace(",", ".");
    const productQuantity = cartProducts[i].getElementsByClassName("product-qtd-input")[0].value;

    TotalAmount  = TotalAmount + (productPrice * productQuantity);
}
TotalAmount = TotalAmount.toFixed(2);
TotalAmount.replace(".", ",");
document.querySelector('.cart-total-container span').innerText = "R$" + TotalAmount;
}