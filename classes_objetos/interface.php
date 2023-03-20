<div class="titulo">Interface</div>

<?php
//Interfaces ajudam a padronizar certas classes, por exemplo,
//Se você quer que todo animal tenha um método respirar()
//Você pode criar uma interface, e toda vez que uma instância de
//Cachorro for criado, a classe Cachorro terá que implementar o
//método respirar()

//Quando alguma classe implementar essa interface ela ganha a 
//obrigação de implementar as funções que vierem junto com a 
//interface

interface Animal{
    //Interfaces em php podem ter apenas métodos, não podem ter
    //implementação, apenas a definição do método
    function respirar();
}

//Uma interface pode herdar outra
interface Canino extends Mamifero{
    function latir(): string; //Retornará uma string
}

interface Mamifero{
    function mamar();
}

interface Felino{
    function correr();
}

class Cachorro implements Animal, Canino{
    //Uma classe pode implementar várias interfaces
    function respirar()
    {
        return "Irei usar oxigênio!";
    }

    function latir(): string
    {
        return "AU AU";
    }

    function mamar()
    {
        return "Vou beber leite";
    }

    function correr(){
        return "Vruuuummm";
    }
}

$animal = new Cachorro();
echo $animal->respirar();
echo "<br>";
echo $animal->latir();
echo "<br>";
echo $animal->mamar();

echo "<br>";

echo $animal->correr();

echo "<br>";

var_dump($animal);

echo "<br>";

var_dump($animal instanceof Cachorro); //True
var_dump($animal instanceof Canino); //True
var_dump($animal instanceof Animal); //True
var_dump($animal instanceof Felino); //False
//Mesmo eles tendo o mesmo nome de função $animal não é uma
//instância de Felino pois não foi implementada