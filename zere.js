function formatarCPF() {
    var input = document.getElementById("cpfInput");
    var cpf = input.value.replace(/\D/g, ""); // Remove todos os caracteres não numéricos
    cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2"); // Insere um ponto após os primeiros 3 dígitos
    cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2"); // Insere um ponto após os próximos 3 dígitos
    cpf = cpf.replace(/(\d{3})(\d{1,2})$/, "$1-$2"); // Insere um traço antes dos últimos 2 dígitos
    input.value = cpf;
  }