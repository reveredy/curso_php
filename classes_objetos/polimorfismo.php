<div class="titulo">Polimorfismo</div>

<?php

abstract class Comida{
    public $peso;
}

class Arroz extends Comida{

}

class ArrozAgrega extends Arroz{

}

class Feijao extends Comida{

}

class Sorvete extends Comida{

}

class Pessoa{
    public $peso;

    function __construct($peso){
        $this->peso = $peso;
    } 
    
    //O polimorfismo nesse caso está no fato de que qualquer classe
    //que herde de arroz será aceito, nesse caso hora ela é Arroz
    //Hora ele é ArrozAgrega, que é um tipo de arroz
    public function comer(Arroz $comida){
        $this->peso += $comida->peso;
    }
}

$c1 = new Arroz();
$c1->peso = 0.55;

$c2 = new ArrozAgrega();
$c2->peso = .25;

$c3 = new Sorvete();
$c3->peso = .65;

$p = new Pessoa(83.45);
$p->comer($c1);
$p->comer($c2);
// $p->comer($c3); //Não funciona porque definimos na classe Pessoa,
//método comer(), que só aceitaria o tipo Arroz(ou quem herde arroz)

echo $p->peso;

