<div class="titulo">Require e Return</div>

<?php

$valorRetorno = require('return_usado.php');
//Inserindo o valor retornado de "return_usado.php" na variável
echo "$valorRetorno<br>";
//imprimindo o valor da variável
echo "$variavelRetornada<br>";
//imprimindo diretamente o valor da variável que está dentro do
//documento "return_usado.php"

echo require('return_usado.php'), "<br>";
//Também podemos chamar diretamente o require que também
//teremos o return e acesso a variável

echo __DIR__ . '<br>';
//Vendo o caminho absoluto do diretório

$valorRetorno2 = require(__DIR__ . '/return_nao_usada.php');
var_dump($valorRetorno2);
//Retorna (1) se a variável não estiver vazia e false se ela
//estiver vazia

echo "$valorRetorno2<br>";
//Retorna apenas (1) pois o documento não tem retorno, assim, sem
//return temos acesso apenas aos membros (atributos e métodos)
echo "$variavelDeclarada<br>";
// Valor do atributo que está dentro do documento
// "return_nao_usada.php"