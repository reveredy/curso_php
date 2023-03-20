<div class="titulo">Interpolação</div>

<?php
    $numero = 10;

    echo "<br> $numero";

    $texto = "A sua nota é: $numero.";
    echo "<br>$texto";

    $objeto = "caneta";
    echo "<br>Eu tenho 5 $objeto";
    //Quando usamos "aspas duplas" podemos passar junto uma variável que o PHP vai conseguir interpretar
    echo '<br> $objeto';
    //Já com 'aspas simples' isso não é possível
    echo "<br>Eu tenho 5 {$objeto}s";
    //Quando queremos adicionar algo escrito logo após a variável, devemos referenciar ela dentro de {chaves}
    echo "<br>Eu tinha 5 { $objeto}s mas perdi 3 {$objeto }s";
    //Não é recomendado o uso de espaços dentro das chaves
?>