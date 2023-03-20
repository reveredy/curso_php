<div class="titulo">Traits #02</div>

<?php

trait validar{
    public function validarS($str){
        return isset($str) && $str !== '';
    }
}

trait validarMelhor{
    public function ValidarS($str){
        return isset($str) && trim($str);
    }
}

class User{
    use validar, validarMelhor{
        validarMelhor::validarS insteadOf validar;
        //Posso só trocar quando desejar usar a outra validação

        // validar::validarS insteadOf validarMelhor;

        //Aqui estamos criando um alias, mudando o nome da função
        //que está com conflito. Dessa maneira ainda podemos
        //usar as duas funções
        validar::validarS as validacaoSimples;
    }
}

$user = new User();

var_dump($user->validarS(' '));
echo '<br>';
var_dump($user->validacaoSimples(' '));