<div class="titulo">Desafio Data</div>

<?php
    class Data{
        //Atributos
        public $dia = 1;
        public $mes = 1;
        public $ano = 1970;

        //Métodos
        public function apresentar(){
            return "$this->dia/$this->mes/$this->ano";
        }
    }

    //Criando uma instância de Data
    $d1 = new Data;

    echo $d1->apresentar();

    $d1->dia = 15;
    $d1->mes = 03;
    $d1->ano = 2023;

    echo '<br>', $d1->apresentar();
?>