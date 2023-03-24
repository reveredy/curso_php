<div class="titulo">Desafio do Módulo</div>

<?php
require_once('usuario.php');

$usuario1 = new Usuario('Carlos Andre', 33, 'd3d3e');
echo $usuario1->apresentar(), '<br>';
unset($usuario1);