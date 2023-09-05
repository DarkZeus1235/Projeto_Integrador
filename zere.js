
function formatarNDC() {
    var input = document.getElementById("ndcInput");
    var ndc = input.value.replace(/\D/g, ""); // Remove todos os caracteres não numéricos
    ndc = ndc.replace(/(\d{4})(\d)/, "$1  $2"); // Insere um espaco após os primeiros 4 dígitos
    ndc = ndc.replace(/(\d{4})(\d)/, "$1  $2"); // Insere um espaco após os próximos 4 dígitos
    ndc = ndc.replace(/(\d{4})(\d)/, "$1  $2"); // Insere um espaco antes dos últimos 4 dígitos
    ndc = ndc.replace(/(\d{4})(\d)/, "$1  $2"); // Insere um espaco antes dos últimos 4 dígitos
    input.value = ndc;
  }
  function formatarVAL() {
    var input = document.getElementById("valInput");
    var val = input.value.replace(/\D/g, ""); // Remove todos os caracteres não numéricos
    val = val.replace(/(\d{2})(\d)/, "$1/$2"); // Insere uma barra após os primeiros 2 dígitos
    input.value = val;
  }
  function formatarCVV() {
    var input = document.getElementById("cvvInput");
    var cvv = input.value.replace(/\D/g, ""); // Remove todos os caracteres não numéricos
    cvv = cvv.replace(/(\d{3})(\d)/,); // 
    input.value = cvv;
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