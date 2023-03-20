<div class="titulo">Membros Estáticos</div>

<?php

class A{
    public $naoStatic = 'Variável de instância';
    //A variável não estática será criada uma dela pra cada instância(objeto)
    public static $static = 'Variável de classe (estática)';
    //Já a variável estática (de classe) será criada uma vez dentro
    //da classe mas todas as instâncias terão acesso a essa variável
    //e sempre com o mesmo valor

    public function mostrarA(){
        echo "Não estático = $this->naoStatic<br>";

        //Tentativa 1
        // echo "Estática = $this->static<br>"; //Essa não é a forma de acessar um membro estático
        
        //Tentativa 2
        // echo "Estática = {self::$static}<br>";
        //Não funciona na interpolação
        
        //Tentativa 3
        //A grande diferença na hora de chamar um membro static
        //É a palavra reservada que invés de $this se usa o self::
        echo "Estática = " . self::$static . "<br>";
        //Não funciona na interpolação
    }

    public static function mostrarStatic(){
        // echo "Não estática = $this->naoStatic<br>";
        //o $this não está disponível dentro de uma função estática (de classe)
        //Porque como você saberia qual instância está sendo chamada
        //ou se já foi criada alguma instância para ser usada
        echo "Estática = " . self::$static . "<br>";
    }
}

$objetoA = new A();
$objetoA->mostrarA();

echo A::$static, '<br>'; //Variável estática (de classe)
A::mostrarStatic(); //Acessar diretamente pela classe
//forma correta de acessar uma função estática

A::$static = 'Alterado o membro de classe'; //Conseguimos alterar normalmente
//um membro de classe(static)

echo A::$static;