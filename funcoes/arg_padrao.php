<div class="titulo">Argumento padrão</div>

<?php 
    //Se não for passado um argumento para a função ele já tem
    //como padrão a resposta "Senhor" para nome e
    //"Cliente" para sobrenome
    //Se apenas um dos dois argumentos for passado ele substituirá a resposta padrão
    function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente'){
        return "Bem vindo, $nome $sobrenome!<br>";
    };

    echo saudacao(); //Não foi passado argumento, retornará
    //Bem vindo, Senhor Cliente!
    echo saudacao(NULL);//Foi passado um null como argumento para o primeiro parâmetro. Retornará
    //Bem vindo, Cliente
    echo saudacao(null, Null);//Foi passado dois null como argumento. Retornará
    //Bem vindo,!
    echo saudacao("Mestre", "Supremo"); //Aqui como foi passado os 2 argumentos substituirá o padrão de cada parâmetro. Retornará
    //Bem vindo, Mestre Supremo

    function anotarPedido($comida, $bebida = 'Água'){
        echo "Para comer: $comida <br>";
        echo "Para beber: $bebida <br>";
    }

    function anotarPedido2($bebida = 'Água', $comida){
        echo "Para comer: $comida <br>";
        echo "Para beber: $bebida <br>";
    }

    //Dica: Se for passar um parâmetro com resposta padrão
    //passe sempre como último parâmetro, para ele não se tornar
    //obrigatório tbm

    anotarPedido("Hamburguer");
    //Nesse caso somente o primeiro parâmetro é obrigatório
    anotarPedido2("Refrigerante", "Hamburguer");
    //Dessa maneira o primeiro também se torna obrigatório
    //pois não podemos escolher passar apenas o segundo
    //parâmetro sem passar o primeiro
?>