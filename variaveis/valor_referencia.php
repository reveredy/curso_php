<div class="titulo">Valor X Referência</div>

<?php
    $variavel = 'valor inicial';
    echo $variavel;

    //Atribuição por Valor
    $variavelValor = $variavel;
    echo "<br>$variavel";
    $variavelValor = 'Novo valor';
    echo "<br>$variavel";
    echo "<br>$variavelValor";

    // Atribuição por Referência
    $variavelReferencia = &$variavel;
    $variavelReferencia = 'mesma referencia';

    echo "<br>$variavel $variavelReferencia"
?>