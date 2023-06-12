const RemoveProductButtons = document.getElementsByClassName(".remove-product-button");
console.log(RemoveProductButtons);
for(var i = 0; i < RemoveProductButtons.length; i++){
    RemoveProductButtons[i].addEventListener("click", function(){
        console.log('clicou');
    })
}