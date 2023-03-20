<div class="titulo">Primeira Classe</div>

<?php
    //Anatomia básica de uma classe PHP
    //Nome com a primeira letra maiúscula sempre
    class Cliente{
        //Atributos
        public $nome = 'Anônimo'; //Public é um modificador de visibilidade para esse atributo.
        //Significa que ele estara visível fora da classe
        public $idade = '18';

        //Métodos
        public function apresentar(){
            return "Nome: {$this->nome} Idade: {$this->idade}";
            //Para acessarmos os atributos precisamos usar o 
            // $this
        }
    }


    $c1 = new Cliente();
    $c1->nome = 'Carlos';
    $c1->idade = 33;

    echo $c1->apresentar();

    echo '<br>';
    
    $c2 = new Cliente();
    $c2->nome = 'Tairini';
    $c2->idade = 28;

    echo $c2->apresentar(), '<br>';
    echo $c1->nome, ' e ';
    echo $c2->nome;
?>