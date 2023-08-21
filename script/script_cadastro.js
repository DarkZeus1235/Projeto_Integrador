function validateFields() {
    var inputs = document.querySelectorAll('input[type="text"], input[type="password"]');
    var controle = false;

    for (var i = 0; i < inputs.length; i++) {
        if (inputs[i].value.trim() !== '') {
            controle = true;
            break;
        }
    }

    if (controle) {
        showAlert();
        return false; // Impede o envio do formulário
    } else {
        return true; // Permite o envio do formulário
    }
}

function showAlert() {
    Swal.fire({
        text: 'Sucesso ao cadastrar.',
        icon: 'success',
        title: 'Sucesso',
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "cadastro.php";
        }
    });
}
