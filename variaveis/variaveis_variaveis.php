<div class="titulo">Variáveis variáveis</div>
<?php
    //Variáveis variáveis se trata de ter váriaveis com nomes de outras variáveis já criadas
    $a = 'valorB';
    $$a = 'valorAA';
    echo "$a {$$a} ${$a} $valorB";

    echo "<br>";

    $epa = 'opa';
    $opa = 'vish';
    $vish = 'eita!!!';

    echo "$epa {$$epa} {$$$epa}";
?>