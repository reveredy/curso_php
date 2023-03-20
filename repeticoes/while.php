<div class="titulo">While/Do While</div>

<?php
    const VALOR_LIMITE = 5;
    $contador = 0;

//O while só entra no laço de repetição se a expressão for true
    while($contador < VALOR_LIMITE){
        echo "while $contador <br>";
        $contador++;
    }

    $contador = 0;

//A grande diferença do do-while é que ele sempre vai entrar
// no laço de repetição pelo menos 1 vez, pois a verificação
// da expressão só é feita no final do bloco;
    do{
        echo "do-while $contador <br>";
        $contador++;
    }while($contador < VALOR_LIMITE);
?>