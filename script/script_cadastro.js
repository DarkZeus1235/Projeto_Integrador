const ConfirmRegister = document.getElementsByClassName("input-register-confirm");
for (var i = 0; i < ConfirmRegister.length; i++)


function validateFiels(){
    var inputs = document.getElementsByClassName("input-register-password");
    var controle = false;
    for (var i = 0; i < inputs.length; i++){
        if(inputs[i].ariaValueMax.trim() !== ''){
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
    Swal.fire({
        text: 'Você conseguiu se cadastrar!',
        icon: 'success',
        title: 'Sucesso',
    }) .then((result) => {
        if(result.isConfirmed){
            window.location.href = "login.php";
        }
    })
}