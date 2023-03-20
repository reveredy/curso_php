<div class="titulo">Argumentos e Retorno</div>

<?php
    function obterMensagem(){
        return 'Seja bem vindo(a)!';
    }

    obterMensagem(); //Não retornará nada, porque para exibir algo no browser é necessário chamar o echo

    echo obterMensagem(); //Agora sim retornará o conteúdo da função

    //Também pode armazenar dentro de uma variável

    $mensagem = obterMensagem();

    echo "<br>", $mensagem;

    //Função com parâmetro

    function obterMensagemComNome($nome){
        return "Bem vindo, {$nome}!";
    }

    echo "<br>";
    echo obterMensagemComNome('Carlos');
    
    function soma($a, $b){
        return "A soma entre $a e $b é: ". $a + $b;
    }
    
    $x = 4;
    
    echo "<br>";
    echo soma($x, 5);
    //Podemos passar tanto valores literais quanto variáveis com
    //um valor dentro.
    
    function trocaValor($a, $novoValor){
        $a = $novoValor;
    }
    
    //Será que o valor da variável será alterado?
    $variavel = 1;
    trocaValor($variavel, 3);
    echo "<br>", $variavel;
    //Não será alterado porque por padrão o php passa uma cópia
    //da variável e não a referência em memória
    //dessa forma só altera enquanto a função estiver em uso
    
    function trocaValorDeVerdade(&$a, $novoValor){
        $a = $novoValor;
    }
    //Agora será alterado o valor da variável passada, pois
    //estamos passando a referência de memória e não uma cópia
    //usando o & junto com o nome da variável
    echo "<br> Antes da função: $variavel";
    trocaValorDeVerdade($variavel, 1000);
    echo"<br> Depois da função: $variavel";
?>