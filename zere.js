document.getElementById('cadastroForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const formData = new FormData(this);
    const xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            const resultadoDiv = document.getElementById('resultado');
            resultadoDiv.innerHTML = xhr.responseText;
            document.getElementById('cadastroForm').reset();
        }
    };

    xhr.open('POST', 'cartao.php', true);
    xhr.send(formData);
});

function formatarNDC() {
    var input = document.getElementById("ndcInput");
    var ndc = input.value.replace(/\D/g, ""); // Remove todos os caracteres não numéricos
    ndc = ndc.replace(/(\d{4})(\d)/, "$1  $2"); // Insere um espaco após os primeiros 4 dígitos
    ndc = ndc.replace(/(\d{4})(\d)/, "$1  $2"); // Insere um espaco após os próximos 4 dígitos
    ndc = ndc.replace(/(\d{4})(\d)/, "$1  $2"); // Insere um espaco antes dos últimos 4 dígitos
    ndc = ndc.replace(/(\d{4})(\d)/, "$1  $2"); // Insere um espaco antes dos últimos 4 dígitos
    input.value = ndc;
  }
  function formatarCEP() {
    var input = document.getElementById("cepInput");
    var cep = input.value.replace(/\D/g, ""); // Remove todos os caracteres não numéricos
    cep = cep.replace(/(\d{5})(\d)/, "$1-$2"); // Insere um traço após os primeiros 5 dígitos
    input.value = cep;
  }
  function validarEmail() {
    var input = document.getElementById("emailInput");
    var error = document.getElementById("emailError");

    if (input.checkValidity()) {
      // O e-mail é válido
      error.style.display = "none";
      alert("E-mail válido: " + input.value);
    } else {
      // O e-mail é inválido
      error.style.display = "block";
    }
  }