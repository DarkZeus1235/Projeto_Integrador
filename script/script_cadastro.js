const ConfirmRegister = document.getElementsByClassName("input-register-confirm");
for (var i = 0; i < ConfirmRegister.length; i++){
    ConfirmRegister[i].addEventListener("click", validateFields)
}


function validateFields(){
    var inputs = document.getElementsByClassName("input-register-password");
    var controle = false;
    for (var i = 0; i < inputs.length; i++){
        if(inputs[i].value.trim() !== ''){
            controle = true;
            break;
        }
    }
    if(controle){
        showAlert();
        return false; // Impede envio do formulário
    } else{
        controle = false;
        inputs = false;
        return true; // Permite envio do formulário 
    }
}
function showAlert(){
    showAlert.fire({
        text: 'Sucesso ao cadastrar',
        icon: 'success',
        title: 'Sucesso',
    }).then((result) => {
        if(result.isConfirmed){
            window.location.href = "login.php"
        }
    })   
   
}