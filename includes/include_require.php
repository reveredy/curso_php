<div class="titulo">Include vs Require</div>

<?php
// A principal diferença entre o include e o require é como o PHP
// trata cada erro. Com o include (quando chamamos um arquivo
// inexistente) ele gera um warning, o que não trava o programa
// Já com o require ele gera um erro fatal, o que trava o
// programa todo, após a linha onde tem o require
ini_set('display_errors', 1);

echo "Usando include com arquivo inexistente...<br>";
include('arquivo_inexistente.php');

echo "Usando o require com arquivo inexistente...<br>";
require("arquivo_inexistente.php");

echo "Não achou o mesmo...<br>";