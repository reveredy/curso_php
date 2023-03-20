<div class="titulo">Classe Abstrata</div>

<?php

abstract class Abstrata{
    public abstract function metodo1();

    protected abstract function metodo2($parametro);

    //Não podemos criar métodos privados dentro de classe abstrata
}

abstract class FilhaAbstrata extends Abstrata{
    //Como foi herdado uma classe abstrata nós não temos a obrigação de
    //implementar os métodos que vieram do pai, mas aqui eu resolvi implementar
    //apenas 1 método da classe pai.
    public function metodo1(){
        echo "Executando método 1<br>";
    }

    //Também posso adicionar novos métodos abstratos nessa classe, pois ela também
    //é uma classe abstrata
    public abstract function metodo3();
    //Assim quem terá obrigação de instanciar os 3 métodos é uma classe concreta
}

class Concreta extends FilhaAbstrata{
    public function metodo1()
    {
        echo "Executando método 1 Extendido<br>";
        parent::metodo1();
    }

    protected function metodo2($parametro)
    {
        echo "Executando método 2, com parâmetro $parametro<br>";
    }

    public function metodo3(){
        echo "Executando método 3<br>";
        //Chamando o método 2 dentro da função publica ele irá funcionar e será 
        //exibido
        $this->metodo2("Interno");
    }
}

$c = new Concreta();
$c->metodo1();
// $c->metodo2("Externo"); //Não vai aparecer pois é um método protected
$c->metodo3();

echo "FIM!";