if (document.readyState = "loading"){
    document.addEventListener("DOMContentLoaded",ready);
}else{
    ready()
}

//  Início do Script para remover produtos do carrinho
var TotalAmount = "0,00"
function ready (){
const RemoveProductButtons = document.getElementsByClassName(".remove-product-button");
console.log(RemoveProductButtons);
for(var i = 0; i < RemoveProductButtons.length; i++){
    RemoveProductButtons[i].addEventListener("click", function(removeProduct){
        event.target.parentElement.parentElement.remove()
        updateTotal()
    })
}}
function removeProduct(event){
    event.target.parentElement.parentElement.remove();
    updateTotal();
}
// fim do Script para remover produtos do carrinho

// Início do script para ver a quantidade de produtos
const quantityInputs = document.getElementsByClassName("product-qtd-input")
    for (var i = 0; i < quantityInputs.length; i++){
        quantityInputs[i].addEventListener("change", updateTotal)
    }
// Fim do script para ver a quantidade de produtos

// Início do script para adicionar produtos ao carrinho
const addToCartButtons = document.getElementsByClassName("button-hover-background")
for (var i = 0; addToCartButtons.length; i++){
    addToCartButtons[i].addEventListener("click", addProductToCart)
// Fim do script para adicionar produtos ao carrinho

// Início do script para realizar a compra
    const purchaseButton = document.getElementsByClassName(".purchase-button")
    purchaseButton.addEventListener("click", makePurchase)
} 
// Fim do script para realizar a compra

/* Esse script é para o carrinho vazio */
function makePurchase(){
    if(TotalAmount === "0,00"){
        alert("Seu carrinho está vazio!!")
    }else{
        // O script abaixo é para realizar a compra com o carrinho cheio!
    alert(`
    Obrigado pela sua compra! 
    Valor do pedido: ${TotalAmount}
    Volte sempre :)
    `)
    }
}


/*
document.querySelector(".cart-table tbody").innerHTML = ""
updateTotal()
function checkIfInputisNull(event){
    console.log(event.target)
    if(event.target.value === 0){
        event.target.parentElement.parentElement.remove()
    }
    updateTotal()
}
*/

// Início do script de adicionar produtos ao carrinho
function addProductToCart(event){
    const button = event.target
    const ProductInfos = button.parentElement.parentElement
    const ProductImage = ProductInfos.getElementsByClassName("product-image")[0].src
    const ProductTitle = ProductInfos.getElementsByClassName("product-title")[0].innerText
    const ProductPrice = ProductInfos.getElementsByClassName("product-price")[0].innerText
    const productsCartName = document.getElementsByClassName("cart-product-title")
    for (var i = 0; i < productsCartName.length; i++){
        if(productsCartName[i].innerText === ProductTitle){
            productsCartName[i].parentElement.parentElement.getElementsByClassName("product-qtd-input")[0].value++
        }
    }
    let newCartProduct = document.createElement("tr")
    newCartProduct.classList.add("cart-product")
    newCartProduct.innerHTML = 
    `
    <td class="product-identification">
    <img src="${ProductImage}" alt="${ProductTitle}" class="cart-product-image">
    <strong class="cart-product-title">${ProductTitle}</strong>
  </td>
  <td>
    <span class="cart-product-price">${productPrice}</span>
  </td>
  <td>
    <input type="number" value="1" min="0" class="product-qtd-input">
    <button type="button" class="remove-product-button">Remover</button>
  </td>
    
    `
    const tableBody = document.querySelector(".cart-table tbody")
    tableBody.append(newCartProduct)
    updateTotal()
    console.log(newCartProduct)
    newCartProduct.getElementsByClassName("product-qtd-input")[0].addEventListener("change", checkIfInputisNull)
    newCartProduct.getElementsByClassName("remove-product-button")[0].addEventListener("click", removeProduct)
}
// fim do script de adicionar produtos ao carrinho

// Início do update das informações do produto
function updateTotal(){
TotalAmount = 0;
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
// Fim do update