<div class="titulo">Break/Continue</div>

<?php
    $cont = 10;
    for(;;){
        echo "$cont ";
        $cont++;
        
        if($cont > 20) break;
    }

    echo "<hr>";
    
    for(;;){
        $cont++;
        if($cont % 2 === 1) continue;
        //Se o número for ímpar (continue, ou seja. Pule pra próxima repetição)
        echo "$cont ";
        if($cont >= 40) break;
    }
    
    echo "<hr>";

    foreach(array(1,2,3,4,5,6) as $valor){
        if($valor % 2 === 0) continue;
        if($valor === 5) break;
        echo "$valor <br>";
    }

    echo "Fim!";
    ?>