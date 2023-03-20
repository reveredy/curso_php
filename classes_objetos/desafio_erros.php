<div class="titulo">Desafio 7 erros</div>

<?php

interface Template{
    function metodo1();
    public function metodo2($parametro);
} //Tudo certo

// abstract class ClasseAbstrata extends Template{
//     public function metodo3(){
//         echo "Estou funcionando";
//     }
// }

//Erro 1: Uma classe não pode (extends) um Template, ela
//tem que (implements)

//Quando uma classe Abstrata (implements) um template ela não
//precisa implementar todos as funções herdadas do template
//ela pode deixar essa função para a classe final(concreta) 

abstract class ClasseAbstrata implements Template{
    public function metodo3(){
        echo "Estou funcionando";
    }
}


// class Classe implements ClasseAbstrata{
//     function __construct($parametro){

//     }
// }

//Erro 2: Quando uma classe herda uma Classe abstrata ela
//(extends) e não (implements)

//Erro 3: Quando uma classe concreta (extends) uma classe Abstrata
//ela precisa implementar todos os métodos herdados

class Classe extends ClasseAbstrata{
    function __construct($parametro){

    }

    //Um método(metodo1) quando vem de um interface por padrão
    //ele é público
    public function metodo1(){
        echo "Método 1";
    }

    public function metodo2($parametro){
        echo "Método 2 com parâmetro $parametro";
    }

    //Não precisamos fazer nada com o método 3 pois ele já
    //estava implementado na classe abstrata
}

// $exemplo = Classe();

// Erro 4: Para instanciarmos uma classe devemos usar a palavra
// reservada (new)

// Erro 5: Como o construtor da Classe pedia um parâmetro mesmo
// que não usado, devemos informar ele

$exemplo = new Classe("Parâmetro do construtor");

// $exemplo.metodo3();

// Erro 6: Para chamarmos um membro de instância em PHP, devemos
// usar o (->), a linguagem onde o (.) é usado para acessar um
// membro é o Java

echo "Método 3 ";
$exemplo->metodo3();
echo '<br>';
$exemplo->metodo1();
echo '<br>';
$exemplo->metodo2("Externo");

//Na resolução do desafio ele usou os métodos não implementados
//como 1 erro cada um (por isso no meu deu 6 e no dele 7), eu
//coloquei os 2 erros como 1