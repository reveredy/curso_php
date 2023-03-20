<div class="titulo">Variáveis</div>

<?php
//A variável em PHP obrigatóriamente começa com o $ depois o nome;
//Variáveis em PHP são case sensitive
$numeroA = 13;

echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$soma = $a + $b;
// Podemos usar o conteúdo de 2 variáveis para fazer operações
//aritméticas
echo $soma;

echo '<br>';
echo isset($soma);
// O isset mostra se a variável está setada com alguma valor dentro

unset($soma);
// unset() 'limpa' a variável, deixando ela como null
echo '<br>';

var_dump($soma);
echo '<br>';

$variavel = 10;
// Variáveis em PHP tem a tipagem "fraca". Ou seja, elas não
// precisam ser declaradas para cada tipo, basta declarar a
// variável e colocar qqr tipo de dado
echo '<br>' . $variavel;

$variavel = "Agora sou uma String";
//$variavel era um int(10) agora passar a ser uma string(20) "Agora sou uma String"
echo '<br>' . $variavel;

echo '<br>' . '<h2>Variáveis aula 2</h2>';

// Nomes de variáveis
$var = 'válida';
$var2 = 'válida';
$VAR = 'válida';
$VAR3 = 'válida';
$_var_4 = 'válida';

// $3var = 'invalido';
// $%var7 = 'invalido';
// $var7% = 'invalido';

//Variáveis pré-definidas dentro do PHP exemplo:

echo '<br>';
var_dump($_SERVER['HTTP_HOST']);

?>