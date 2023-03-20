<div class="titulo">Modificador final</div>

<!-- A funcionalidade para final é bem simples de ser entendida
    para métodos, garante que ele não possa ser reescrito.
    E para classes garante que ela não possa ser herdada
-->

<?php

abstract class Abstrata{
    public abstract function metodo1();

    public final function metodo2(){
        echo "Não pode ser alterada!";
    }
}

class ClasseConcreta extends Abstrata{
    function metodo1(){
        echo "Executando método 1<br>";
    }

    // function metodo2(){
    //     echo "Extendendo método 2<br>";
    // }
    
    //O método2() não pode ser sobrescrito pois está setado
    //com o modificador (final)
}

final class Unica{
    public $att = 'Valor Único';
}

// class Duplicata extends Unica{
//     public $att2;
// }

//Vai gerar um erro, pois uma classe final não pode ser herdada

$c = new ClasseConcreta();
$c->metodo1();
$c->metodo2();

echo '<br>';

$final = new Unica();
echo $final->att;

?>