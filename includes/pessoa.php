<?php

class Pessoa{
    public $nome;
    public $idade;

    function __construct($nome, $idade){

        //$this->nome é referente ao atributo do objeto
        $this->nome = $nome; //$nome é referente ao parâmetro do construtor
        $this->idade = $idade;
    }

    public function apresentar(){
        return "$this->nome, $this->idade anos";
    }
}