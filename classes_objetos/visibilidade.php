<div class="titulo">Visibilidade</div>

<?php

class A{
    public $publico = 'Publico';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarAtributos(){
        echo "Classe Teste) Publico = {$this->publico} <br>";
        echo "Classe Teste) Protegido = {$this->protegido} <br>";
        echo "Classe Teste) Privado = {$this->privado} <br>";
        // echo $this->naoMostrar(); //Nesse caso o naoMostrar vai
        // ser exibido porque ele foi chamado dentro de uma função que não é privada
    }

    protected function vaiPorHeranca(){
        echo "Serei transmitido por herança!<br>";
    }

    private function naoMostrar(){
        echo 'Não vou imprimir!!!';
 
    }
}

class B extends A{
    public function mostrarB(){
        echo "Class B) Publico = {$this->publico}<br>";
        echo "Class B) Protegido = {$this->protegido}<br>";
        //vai ser transmito por herança, então será exibido
        echo "Class B) Privado = {$this->privado}<br>";
        //Não será exibido, pois quando a visibilidade está como
        //privado ela só será exibida se for usada dentro da própria
        //classe e chamada dentro de uma função publica

        parent::vaiPorHeranca(); 
        //Ela pode ser acessada dentro da classe no qual recebeu a herança,
        //ou seja, não pode ser chamada direto na instância
    }
}

echo "Classe A - Superclasse<br>";

$a = new A();

$a->mostrarAtributos();
// $a->naoMostrar(); //Não vai funcionar porque o método naoMostrar() é privado, só pode ser acessado de dentro da própria classe

echo "<hr>";

$b = new B();

echo "Classe B - Sub classe<br>";

$b->mostrarAtributos(); //Chamando o método da Superclasse
//pois ele foi passado por herança então vai funcionar

echo "<hr>";

$b->mostrarB();
// $b->naoMostrar(); //Também não foi exibido