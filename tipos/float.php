<div class="titulo">Tipo Float</div>

<?php
    echo 1.1, '<br>';

    var_dump(1.0);
    echo '<br>';

    echo PHP_FLOAT_MAX, '<br>';
    echo PHP_FLOAT_MIN, '<br>';
    echo 1.2e3, '<br>'; //Resultado fica: 1.2 com 3 zeros após o ponto (contando os números já existentes)
    echo 1.2E-3, '<br>'; //Resultado fica: o valor e adiciona a quantidade de zeros antes deles
?>