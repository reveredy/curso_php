<div class="titulo">Métodos Mágicos</div>

<?php

class Pessoa{
    public $nome;
    public $idade;

    function __construct($nome, $idade){
        echo "Método construtor<br>";
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct(){
        echo "Método destruct";
    }

    function __toString(){
        return "$this->nome tem $this->idade anos.";
    }

    public function apresentar(){
        //O $this 
        echo $this . '<br>';
    }

    //O método __get é chamado sempre que você tentar chamar um
    //atributo que não existe, ele é chamado e faz a lógica que
    //você colocar dentro dele.
    //Caso o método __get não existisse ele retornaria NULL
    public function __get($atrib){
        echo "Lendo atributo não declarado: $atrib<br>";
    }

    //Método __set($atrib, $valor) serve para executar alguma
    //lógica quando se tenta alterar o valor de um atributo
    //inexistente
    public function __set($atrib, $valor){
        echo "Alterando atributo não declarado: $atrib / $valor";
    }

    //Método _call($metodo, $parametros) serve para executar
    //alguma lógica quando se tenta chamar um método inexistente
    //dentro da classe
    public function __call($metodo, $params){
        echo "Tentando executar método $metodo";
        echo ", com os parâmetros: ";
        //Parâmetros retorna um array, por isso o print_r
        print_r($params);
    }
}

$pessoa = new Pessoa("Carlos", 33);
$pessoa->apresentar();

echo $pessoa, "<br>";

//Chamando um atributo que não existe na classe Pessoa
//Chama o método __get;
echo $pessoa->nomeCompleto;
//Alterando o valor de um atributo que não existe na classe Pessoa
//Chama o método __set
$pessoa->nomeCompleto = 'Muito legal';

echo "<br>";

//Chamando um método que não existe na classe Pessoa
//Chama o método __call
$pessoa->exec(1, 'teste', true, [1,2,3]);

echo "<br>";
// Método __destruct é chamado
$pessoa = NUll;