<div class="titulo">Desafio PI</div>
<?php
    var_dump(pi());
    $pi = 3.14;
    var_dump($pi);

    if($pi - pi() <= 0.001){
        echo '<br>Praticamente iguais';
    }else{
        echo '<br>Diferentes';
    }
?>