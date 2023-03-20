<div class="titulo">Herança</div>

<?php

class Pessoa{
    public $nome;
    public $idade;

    function __construct($nome, $idade){

        //$this->nome é referente ao atributo do objeto
        $this->nome = $nome; //$nome é referente ao parâmetro do construtor
        $this->idade = $idade;
    }

    function __destruct()
    {
        echo "Objeto Pessoa diz tchau";
    }

    public function apresentar(){
        return "$this->nome, $this->idade anos";
    }
}

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

    function __destruct()
    {
        echo "Objeto Usuário diz tchau";
    }

    //Sobrescrita do método apresentar
    //Isso ocorre quando uma classe herda o método da outra e
    //você modifica esse método, assim você está sobrescrevendo
    //o antigo método
    public function apresentar()
    {
        echo parent::apresentar(), " ";
        return "@{$this->login} ";
    }
}

$usuario1 = new Usuario('Carlos', 33, 'd3d3e');

echo $usuario1->apresentar();