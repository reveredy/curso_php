<?php
require_once('pessoa.php');
//Usuario é a sub classe (+ especifica) e Pessoa (+ genérico)
class Usuario extends Pessoa{
    public $login;

    function __construct($nome, $idade, $login)
    {
        // $this->nome = $nome;
        // $this->idade = $idade;
        //parent nós usamos para chamar algum método da superclasse
        parent::__construct($nome, $idade);
        $this->login = $login;
    }

    //Sobrescrita do método apresentar
    //Isso ocorre quando uma classe herda o método da outra e
    //você modifica esse método, assim você está sobrescrevendo
    //o antigo método
    public function apresentar()
    {
        $login =  "@{$this->login} ";
        return $login . parent::apresentar();
    }
}