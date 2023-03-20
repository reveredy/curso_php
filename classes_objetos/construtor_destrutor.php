<div class="titulo">Construtor e Destrutor</div>

<?php

class Pessoa{
    public $nome;
    public $idade;

    function __construct($nome, $idade){
        echo "Construtor Chamado";
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct(){
        echo 'Destrutor chamado';
    }

    public function apresentar(){
        return "$this->nome, $this->idade anos";
    }
}

//Quando os atributos da classe não recebem um valor padrão
//você precisa atribuir esses valores na hora de criar a nova
//instância dessa classe, igual uma função quando tem parâmetros
//obrigatórios

$p1 = new Pessoa('Carlos', 33); //Construtor invocado
echo '<br>';
echo $p1->apresentar(), '<br>'; //Método apresentar invocado
unset($p1); //Destrutor invocado

echo '<hr>';

$p2 = new Pessoa('Tairini', 28); //Construtor invocado
echo '<br>';
echo $p2->apresentar(), '<br>'; //Método apresentar invocado
$p2 = null; //Destrutor invocado