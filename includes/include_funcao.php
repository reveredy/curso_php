<div class="titulo">Include Função</div>

<?php

echo "Carregando: include_funcao<br>";

function carregarArquivo(){
    include('include_arquivo.php');

    echo $variavel . "<br>";
    echo soma(2, 5) . "<br>";
}

echo "Novamente no arquivo include_funcao<br>";
echo soma(1, 8) . "<br>"; //A função soma ainda não existe, pq
//o include dela foi feito dentro da função carregarArquivo()
//e a função só foi chamada na próxima linha
carregarArquivo();

echo "Variável = '{$variavel}'.";
//Nesse caso a variável vai ser nula, porque a outra "variável"
//Fui está dentro da função, então o escopo dela é local(somente dentro da função)
echo soma(1, 8) . "<br>";
//Agora a função soma já está disponível, pois a função
//carregarArquivo() já foi usada 