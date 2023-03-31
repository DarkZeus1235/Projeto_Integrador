// O console.log exibe informações e executa instruções na página.
// A variável obtém um determinado tipo de valor para ser executado em alguma instrução.
// Veja o exemplo abaixo

console.log("Esse é o script do body HAHAHAHAHA");
var teste = 1;
nome = "João"; // Não necessariamente precisa do "var"
console.log(nome);
var meuPrimeironome = 'Ludismildiviniano';
console.log(meuPrimeironome);
var meuSobrenome = 'Silva';
console.log(meuSobrenome);

let torta = 100; // Uma "variável" que funciona em apenas um bloco
const igual = 300; // Não se altera em nenhuma circunstância
console.log(torta);
console.log(igual);

// Number é utilizado para números, existem três símbolos: +Infinity, -Infinity e NaN ( todo número é Number )
// Verifica-se o tipo de dado com 'typeof'
// Veja o exemplo abaixo

var testando = 6;
console.log(typeof testando);
var float = 8.90;
console.log (float);
console.log(typeof float);

var TextoOoOoOoO = 'Bobão0';
console.log(TextoOoOoOoO);
console.log(typeof TextoOoOoOoO); // String = Texto com caracteres, caracteres especiais e números ( se estiverem em aspas ), é possível concanetar elas com '+'

console.log(NaN);
console.log(typeof NaN);
console.log(+Infinity);
console.log(typeof +Infinity);
console.log(typeof -Infinity);

var nome1 = 'Flávio'
var sobrenome = 'Ceareanse'

var NomeInteiro = nome1 + " " + sobrenome;
console.log(NomeInteiro);
document.write("O seu nome é: " + NomeInteiro); // Exibe mensagens na tela. Com a concatenação irá exibir o string junto da informação da variável

// Boolean apresenta valores de verdadeiro ou falso, qualquer comparação é um Boolean, se atribuir o valor "true" ou "false" em uma variável ela será como Boolean
// Veja o exemplo abaixo

var verdade = true;
console.log(verdade);
console.log(typeof verdade);

var fake = false;
console.log(fake);
console.log(typeof fake);

// null e undefined são tipos de dados -> null representa um valor, enquanto undefined é um tipo de dado a um valor não atribuído
// Hoisting
// Veja o exemplo abaixo

var numeral = 5;
console.log(bababababa); // Indefinido pois a variável foi atribuída na linha 60
console.log(numeral);
var amora = null;
var bababababa = "sim";
console.log(amora);
console.log(bababababa);
amora = 'fruta';
console.log(amora);

// Tipos de dados Objetos -> possui propriedades com chave e valor, com intenção de guardar dados para usar posteriormente;
// Veja os exemplos abaixo

var obj = {
    nome: "Dieimes",
    idade: 18,
    profissao: "Professor",
};
console.log(obj);
console.log(typeof obj);
console.log(obj.nome);
console.log(obj.idade);
console.log(obj.profissao);
console.log("O meu nome é: " + obj.nome);

document.write("O meu nome é " + obj.nome + " minha idade é " + obj.idade + " e minha profissão é " + obj.profissao);

// Array é idêntico aos Objetos, porém eles servem como uma lista e utilizam índices em vez de chaves e valores ( pode-se ter qualquer tipo de dado nos Arrays )
// Arrays => []; Objetos => {}
// Veja os exemplos abaixo

var arr = [5, "Dieimes", true, {teste: 1, teste: 2}];
console.log(arr);
var arr2 = [3,4,5,6,7,8];
console.log(arr2);
console.log(arr[1]); // Acessar elemento
console.log(arr2[0]);
var arrei = [10];
console.log(arrei);
arr[4] = 10;
arr[0] = "Teste";
console.log(arr);

// Operadores condicionais são determinadas instruções aplicadas para determinar o fluxo de uma aplicação, por exemplo 'else, elseif, if'
// If => Executa uma instrução enquanto ela for 'verdadeira'
// Veja os exemplos abaixo

var idade = 14;
var idadeMinima = 18;
if(idade >=idadeMinima){
    console.log("Pode fazer a carteira de habilitação");
}
if(idade<18){
    console.log("Precisa esperar alguns anos ainda");
}

// Operadores de comparação verificam as estruturas de condição. Existem os seguintes operadores => ==, !=, >, <, >=, <=. É possível obter um true ou false a partir disso. Veja os exemplos abaixo:

var idade2 = 18;
var TemCorsa = 1;
if(idade2 >= 18){
    console.log("O usuário possui 18 anos de idade");
}
else{
    console.log("O usuário não possui 18 anos de idade");
}
if(TemCorsa >= 1){
    console.log("Você tem um Corsa");
}
else{
    console.log("Vai comprar um Corsa, tonto");
}
var nomes = "Gustavo"
if(nomes == "Gustavo"){
    console.log("O seu nome é Gustavo");
}
else{
    console.log("O seu nome é ABSHUSBSHUIHUSF");
}
var bolo = "Cenoura"
if(bolo != "Milho"){
    console.log("O bolo não é de milho");
}
else{
    console.log("O bolo é de milho");
}

// O else ocorre quando a instrução de "if" seja negativa, enquanto o else if tem como objetivo adicionar uma instrução adicional nas linhas de código. Veja o exemplo abaixo:

var carro = "Peugeot"
if(carro == "Celta"){
    console.log("O carro é um Celta");
} else if(carro == "Fiat"){
    console.log("O carro é um Fiat");
} else if(carro == "BMW"){
    console.log("O carro é uma BMW")
}
else{
    console.log("Ele possui outra marca de carro");
} 

var idade3 = 19;
if(idade3 > 18){
    console.log("Você pode entrar na festa");
} else if(idade3 == 18){
    console.log("Você precisa de uma autorização");
} else {
    console.log("Sai fora, tá expulso da festa");
}

// Os comandos de comparação "===" e "!==" servem para comparar valores e tipos de dado
// Veja o exemplo abaixo

var total = 5;
if(total === 5){
    console.log("O total é um número 5 de tipo number");
} else if(total !== 5){
    console.log("O total não é um número 5 do tipo number");
}

// Os operadores lógicos servem para realizar comparações para retornar um 'true' ou 'false'. Normalmente é usado nas instruções de condição e repetição
// O operador lógico &&, conhecido como AND, se ativa quando duas expressões retornam em true, qualquer outro resultado será retornado um false
// Veja o exemplo abaixo

var idade4 = 17;
var atleta = "Tonhão"
if(atleta == "Tonhão" && idade4 == 17){
    console.log("O Tonhão tem idade para jogar nos escolares");   
} else {
    console.log("Você não é o Tonhão, seu cara de mamão");
}

if((1 == 1 && 3 > 3) && true){
    console.log("Passou!!");
} else if (atleta == "Tonhão" && idade4 >= 15){
    console.log("Aqui passa!");
}

// O operador lógico || ou OR retorna true caso uma das informações seja verdadeira, em outros casos ele apenas retorna false se as duas expressões forem falsas
// Veja o exemplo abaixo

var carne = 'carne de frango';
var churrasqueiro = 'Cleverson';

if(carne == 'carne de boi' || churrasqueiro == 'Hans'){
    console.log("Podemos fazer o churras");
} else {
    console.log("Moiou o churras");
}

if((churrasqueiro == 'Hans' || 32 > 20) && 10 == 10){
    console.log("ta sussa");
} else {
    console.log("ta nada sussa");
}

// O operador lógico ! ou NOT muda o valor que a expressão retornou, ou seja, se receber um valor true, ele se torna false, e vice-vers
// Veja o exemplo abaixo

var tenis = 'nike'

if(!(tenis == 'adidas')){
    console.log("Você tem um tênis daora");
} else {
    console.log("Definitivamente um dos tênis já feitos");
}

// As estruturas de repetição repetem uma instrução em um determinado número de vezes, como repetir uma lógica de um Array. Geralmente utilizamos os comandos for e while
// while => enquanto ( É a estrutura mais simples do JavaScript ), repete um comando até atingir uma determinada condição
// CUIDADO COM O LOOP INFINITO
// Veja o exemplo abaixo

var x = 0;

while (x <= 3){
    console.log("Repetindo comandoooo " + x);

    // incrementador
    x++;
}

arriei = ['teste', 'testando', 'a', 'b'];
var y = 0;
while (y <= 3){
    console.log(arriei[y])
    y++;
}

var palavra = "Juan"
var i = 0;

while (i <= 3){
    console.log(palavra[i]);
    i++;
}
