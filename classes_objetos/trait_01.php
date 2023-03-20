<div class="titulo">Traits #01</div>

<?php

trait validacao{
    public $a = 'Valor A';

    public function validarString($str){
        return isset($str) && $str !== '';
    }
}

trait validarMelhor{
    public $b = 'Valor B';
    private $c = 'Valor C (Privado)';
    
    public function validarStringMelhor($str){
        return isset($str) && trim($str);
        //trim() remove os espaços da string
    }

    public function imprimirC(){
        echo $this->c;
    }
}

class Usuario1{
    use validacao, validarMelhor;
}

$usuario = new Usuario1();
var_dump($usuario->validarString(' '));
echo '<br>';

var_dump($usuario->validarStringMelhor(' '));
echo '<br>';

echo "$usuario->a <br> $usuario->b";
echo '<br>';

echo $usuario->imprimirC();

