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

// Operadores de atribuição atribuem um valor a uma variável, utilizando +=, -=, *=, /= sendo uma forma resumida de x = x + y. Em loops é normal usar ++ ou --

// soma de valores 

var x = 1;
var y = 2;

console.log(x = x + y);
console.log (x += y);

// subtração de valores 

console.log (x -= y);

// multiplicação de valores

console.log(x *= y);

// divisão de valores

console.log(x /= y);

// Loops

console.log (x++);
console.log(x--);

while (x <= 100){
    console.log(x);
    x *= 2;
}

var j = 5;

while (x > 0){
    console.log(x);
    x -= 5;
}

// O atributo FOR é mais complexo que as outras instruções de repetição, mas é usado por proporcionar um maior controle
// Veja o exemplo

for(var u = 0; u < 10; u ++){
    console.log("Repetindo for: " + u);
}

var batata = [1, 2, 3, 4];
for (var f = 0; f < batata.length; f++){
    console.log(batata[f]);
}

for(var damasco = 2; damasco < 100; damasco *= 2){
    console.log(damasco);
}

// O break pode servir para encerrar uma instrução
// O continue serve para pular uma instrução
// Geralmente ambos são usados em loops
// Veja o exemplo abaixo

for(var jabuti = 10; jabuti > 0; jabuti--){
    console.log(jabuti);
    if(jabuti === 5){
        break;
    }
}
console.log("Deu break");

var d = 10;

while(d < 100){
    d += 10;
    if(d === 60 || d === 80){
        console.log("CONTINUE");
        continue;
    }
    console.log("Testando o continue: " + d);
}

// O function pode ser reutilizado que evita diversas repetições de lógica em um programa
// Ela pode ser usada em diversas partes do código
// A function precisa ser invocada e executada
// Veja o exemplo abaixo

function funcaoUm(){
    console.log("Dieimes é legal");
}

funcaoUm();

function dizerNome(nome){
    console.log("O nome do meu professor é: " + nome);
}
dizerNome("Dieimes");
dizerNome("Julius");
dizerNome("Hans");
dizerNome("Cleverson");

var MelhorProfessor = "Dieimes Nunes";

dizerNome(MelhorProfessor);

function soma(a, b){
    var soma = a + b;
    return soma;
}

var somaUm = soma(2, 5)
console.log(somaUm);

var somaDois = soma(120, 180);
console.log(somaDois);

console.log(soma(9, 6));

// Um escopo no JavaScript possui vários tipos, o global que se inicia em toda a aplicação e locais que existem em várias intruções como funções
// Veja o exemplo abaixo

var s = 5;
var e = 10;
console.log(s, e);
function testezinho(){
    var z = 5;
    console.log(z);
}
testezinho();

if (true){
    var p = 1;
}
console.log(p);

// O let e o const podem criar escopos mais confiáveis em instruções como if
// Além de separar cada bloco em um escopo
// Veja um exemplo abaixo

let framboesa = 5; // var framboesa = 5;
const arroz = 10;
framboesa = 12;
console.log(framboesa);
console.log('const: ' + arroz);
if(true){
    let framboesa = 20;
    console.log(framboesa);
    const arroz = 50;
    console.log('const if: ' + arroz);
}
console.log(framboesa);
if(20 > 10){
    const arroz = 100;
    console.log(arroz);
}
for(let aaa = 0; aaa < 10; aaa++){
    console.log(aaa);
}

// O objeto Number foca especificamente nos números e exerce diversas funções nas instruções
// Veja o exemplo abaixo

// parseFLoat 10.0

console.log(parseFloat('12.999'));
console.log(Number.parseFloat('12.999'));

// parseInt

console.log(parseInt('10'));
console.log(parseInt(16.90));

// toFixed

console.log(23.99.toFixed(1));

// isNan

console.log(isNaN('teste'));
console.log(isNaN(12));
console.log(isNaN("12"));
console.log(isNaN('Dieimes'));

// MAX_VALUE e MIN_VALUE

console.log(Number.MAX_VALUE);
console.log(Number.MIN_VALUE);

// O objeto String serve para manusear textos em nossos softwares
// Veja o exemplo abaixo

// lenght

var informar = "Dieimes";
console.log(informar.length);

// indexOf

var frase = "O Dieimes é muito legal";
console.log(frase.indexOf("legal"));

// slice

var malu = frase.slice(8, 18);
console.log(malu);

// replace

var novaFrase = frase.replace("muito", "absurdamente");

console.log(novaFrase);

// toLowerCase e toUpperCase

var textao = "A frase será manipulada";
console.log(textao.toLowerCase());
console.log(textao.toUpperCase());

// trim

var pessoa = "           nome        ";
var pessoaTrim = pessoa.trim();
console.log(pessoa);
console.log(pessoaTrim);

// split

console.log(frase.split(" "));

var tags = "PHP, Javascript, HTML, CSS";
console.log(tags.split(","));

// lastIndexOf

var fraseDois = "Eu acho que deveria achar alguma coisa"
console.log(fraseDois.lastIndexOf("coisa"));

// O array pode adicionar e remover alguns elementos
// Veja o exemplo abaixo

// length

var farofa = [1, 2, 3, 4, 5, 6];
console.log(farofa.length);

// push

farofa.push(6);
farofa.push("Qualquer coisa mesmo");
console.log(farofa);

// pop

farofa.pop();
console.log(farofa);

// unshift
farofa.unshift(0);
console.log(farofa);

// shift

farofa.shift("teste");
console.log(farofa);

// Para acessar o último elemento

console.log(farofa[farofa.length - 1]);

// isArray

console.log(Array.isArray(5));
console.log(Array.isArray(farofa));

// splice

var farofa = [1, 2, 3, 4, 5];
farofa.splice(2, 0, 99);
console.log(farofa);

// indexOf

console.log(farofa.indexOf(5));

// join

var farofa2 = ["O", "rato", "roeu", "a", "roupa", "do", "rei", "de", "Roma"];
console.log(farofa2.join(","));

// reverse

console.log(farofa2.reverse());

// Os objetos possuem diversas propriedades e podem auxiliar nos programas
// Veja o exemplo abaixo

let pessoal = {
    nome: "Dieimes",
    idade: 18,
    falar: function() {
        console.log("O meu nome é Dieimes Nunes");
    },
    somar: function (a, b){
        return a + b;
    },
    apresentar: function(){
        console.log("O meu nome é: " + this.nome + " e tenho: " + this.idade + " anos");
    },
    aniversario: function(){
        this.idade += 1;
    },
    saudar: function (){
        return "Sr. " + this.nome; 
    }
};
console.log(pessoal.nome);
pessoal.falar();
var somatoria = pessoal.somar(5, 10);
console.log(somatoria);

// O this sempre se refere ao objeto global Window
// Em objetos o this pode acessar suas propriedades
// Veja o exemplo abaixo

fabio = 7;
console.log(this.fabio);
pessoal.apresentar();
pessoal.aniversario();
pessoal.aniversario();
var sdc = pessoal.saudar();
console.log(pessoal.idade); 
console.log("OLá " + sdc);

// DOM é Document Object Model, que é uma interface de programação para o HTML, permitindo que possamos utilizar métodos para acessar uma árvore de elementos
// DOM pode fornecer uma cópia do HTML 
// Pode-se manipular eventos no DOM que afetam consequentemente o HTML
// Semelhante ao CSS, pode usar tags como ids e classes
// Veja o exemplo abaixo

// tag 

var titulo = document.getElementsByTagName('h1')[0];
console.log(titulo);
var lis = document.getElementsByTagName('li');
console.log(lis[3]);

// id

var paragrafo = document.getElementById('paragrafo');
console.log(paragrafo);

// class

var itens = document.getElementsByClassName('item');
console.log(itens);

// O querySelector e querySelectorAll permite acessar os elementos de forma mais fácil, baseado em regras do CSS. Veja o exemplo abaixo

var itensClasse = document.getElementsByClassName('.item');
console.log(itens);

// querySelectorAll

var itensQuery = document.querySelectorAll('#lista');
console.log(itensQuery)

// querySelector

var itensQuery2 = document.querySelector('lista .item');
console.log(itensQuery2);

var listas = document.querySelector('#lista');
console.log(listas);

// É possível alterar o texto do JavaScript de forma mais fácil, veja o exemplo abaixo

var title = document.querySelector('#title');
console.log(title);

// innerHTML

title.innerHTML = "Testando a alteração!!!";  

// textContent -> mais rápido e recomendável

var subtitle = document.querySelector('.subtitle');
console.log(subtitle);
subtitle.textContent = "Testando mais uma alteração!!!";

// Podemos criar elementos com o DOM. Veja o exemplo abaixo

var novoElemento = document.createElement("p");
var segundoElemento = document.createTextNode("Este é um novo texto");
novoElemento.appendChild(segundoElemento);
console.log(novoElemento);

var body = document.querySelector("body");
console.log(body);
body.appendChild(novoElemento);

// Inserir em container

var container = document.getElementsByClassName("container");

var el = document.createElement("span");

el.appendChild(document.createTextNode("Teste de span"));

console.log(el);

// É possível remover elementos com o JavaScript, veja o exemplo abaixo

// Removendo elemento filho 

var bababa = document.querySelector('#bababa');
var pp = document.querySelector("#bababa p");
bababa.removeChild(pp);

// Removendo um elemento
/*
var subtitle = document.querySelector(".subtitle");
subtitle.remove();
*/
// Podemos adicoinar elementos dentro da div, como se fosse "acrescentar um filho"
// Veja o exemplo abaixo

var dieiminho = document.createElement("div");
dieiminho.classList= "div-criada";
console.log(dieiminho);
var container = document.querySelector('#container');
// Inserindo elemento filho
container.appendChild(dieiminho);
console.log(container);

// inserBefore - insere antes

/*

var dieiminho2 = document.createElement("div");

dieiminho2.classList = "div-before"

var dieiminho3 = document.querySelector("#container .div-criada");
console.log(dieiminho3);
container.insertBefore(dieiminho2, dieiminho3);

*/

// É possível trocar elementos dentro do DOM, veja o exemplo abaixo

var dieiminho4 = document.createElement('h3');
dieiminho4.classList = "testando-class";
var textao = document.createTextNode("É um texto para testar");
dieiminho4.appendChild(textao);
console.log(dieiminho4);

// Selecionar elemento que deseja trocar
/*
var text = document.querySelector('#title');
console.log(text);
*/

// Selecionar o pai do elemento

var pai = title.parentNode;

// Trocar elementos
/*
pai.replaceChild(dieiminho4, text);
*/

// Pode-se alterar os atributos via JS e DOM, seja o alt de uma imagem ou o SRC -> setAttribute
// Qualquer atributo pode ser alterado via JS
// Veja o exemplo abaixo
/*
var textinho = document.querySelector('#title');
textinho.setAttribute("class", "testando-atributo");
console.log(textinho);

var btn = document.querySelector('#btn');
btn.setAttribute("disabled", "disabled");

var subtitulo = document.querySelector(".subtitle");
subtitulo.setAttribute("id", "titulo-2");
 
// remover atributos

var lista2 = document.querySelector('#lista2');
lista2.removeAttribute("id");
*/
// É possível alterar CSS com o JS, veja o exemplo abaixo

var rodrigo = document.querySelector('#title');

rodrigo.style.color = "red";
