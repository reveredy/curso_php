<div class="titulo">Include Once</div>

<?php
ini_set('display_errors', 1);
include('include_once_arquivo.php');
//incluindo o arquivo, se ele não existir gera um warning
//mas não trava o sistema
require('include_once_arquivo.php');
//incluindo o arquivo, se ele não existir gera um fatal error,
//travando o sistema
//Se tiver função e ela não estiver protegida, essa função vai
//ser redeclarada e vai parar de funcionar

echo "Variável = '{$variavel}'.<br>";
//Chamando a variável com o valor que está no arquivo
$variavel = "Variável Alterada";
//Alterando o valor da variável 
echo "Variável = '{$variavel}'.<br>";
//Chamando a variável com o novo valor

include('include_once_arquivo.php');
//Quando incluimos o mesmo arquivo mais de uma vez, ele reatribui
//o valor inicial para as variáveis
//Nesse caso a variável volta a ter o valor "Estou definida"
echo "Variável = '{$variavel}'.<br>";
//Chamando a variável

$variavel = "Variável Alterada novamente";
//Alterando novamente o valor da variável
echo "Variável = '{$variavel}'.<br>";
//Mostrando o novo valor

include_once('include_once_arquivo.php');
//Quando usamos o include_once(), garantimos que o arquivo só
//será incluso uma única vez
//Nesse caso como ele já foi incluso anteriormente, o PHP
//reconhece isso e não faz um novo include
echo "Variável = '{$variavel}'.<br>";
//Variável permanece com o valor alterado, como usamos o
// include_once() e já tinha feito um include desse arquivo
// anteriormente, não foi feito um novo include agora

require_once('include_once_arquivo.php');
//Acontece a mesma coisa com o require_once, e a variável 
//continua com o mesmo valor
echo "Variável = '{$variavel}'";

//Usando o include_once() ou require_once() nós NÃO precisamos
//proteger as funções dentro do arquivo, pois como só será
//incluso uma vez não vai acontecer de redefinir a função