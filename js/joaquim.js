console.log("Esse é o script do body HAHAHAHAHA");
var teste = 1;
nome = "JP"; // Não necessariamente precisa do "var"
console.log(nome);
var meuPrimeironome = 'jraffis';
console.log(meuPrimeironome); // camelCase
var meuSobrenome = 'cocudo';
console.log(meuSobrenome);

let joaquines = 100; // Uma "variável" que funciona em apenas um bloco
const malu = 300; // Não se altera em nenhuma circunstância
console.log(joaquines);
console.log(malu);

// Number é utilizado para números, exsitem três símbolos: +Infinity, -Infinity e NaN ( todo número é Number )

// Verifica-se o tipo de dado com 'typeof'

var testando = 6;
console.log(typeof testando);
var float = 8.90;
console.log (float);
console.log(typeof float);

var TextoOoOoOoO = 'Bobão069';
console.log(TextoOoOoOoO);
console.log(typeof TextoOoOoOoO); // String = Texto com caracteres, caracteres especiais e números ( se estiverem em aspas ), é possível concanetar elas com '+'

console.log(NaN);
console.log(typeof NaN);
console.log(+Infinity);
console.log(typeof +Infinity);
console.log(typeof -Infinity);

var nome1 = 'JP'
var sobrenome = 'Ceareanse'

var NomeInteiro = nome1 + " " + sobrenome;
console.log(NomeInteiro);
document.write("O seu nome é: " + NomeInteiro); // Exibe mensagens na tela

// Boolean apresenta valores de verdadeiro ou falso, qualquer comparação é um Boolean, se atribuir o valor "true" ou "false" em uma variável ela será como Boolean

var verdade = true;
console.log(verdade);
console.log(typeof verdade);

var fake = false;
console.log(fake);
console.log(typeof fake);

// null e undefined são tipos de dados -> null representa um valor, enquanto undefined é um tipo de dado a um valor não atribuído

// Hoisting

var numeral = 5;
console.log(bababababa); // INDEFINIDO
console.log(numeral);
var gilgamesh = null;
var bababababa = "sim";
console.log(gilgamesh);
console.log(bababababa);
gilgamesh = 'foda';
console.log(gilgamesh);

// Tipos de dados Objetos -> possui propriedades com chave e valor, com intenção de guardar dados para usar posteriormente;

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

var arr = [5, "Dieimes", true, {teste: 1, teste: 2}];
console.log(arr);
var arr2 = [3,4, 5];
console.log(arr2);