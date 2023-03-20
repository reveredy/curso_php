<div class="titulo">Arrays Constantes</div>

<?php
    const FRUTAS = array('laranja', 'abacaxi');

    // FRUTAS[0] = 'banana'; //Não podemos alterar um valor
    // FRUTAS[] = 'banana'; //Nem adicionar um novo valor
    echo FRUTAS[0], "<br>"; //Apenas conseguimos ler o conteúdo
    
    //Também podemos usar chave e valor normalmente
    
    const CARROS = ["fiat" => "uno", "ford" => "fiesta"];
    echo CARROS["fiat"]; //Apenas conseguimos ler o conteúdo

    define('CIDADES', array("Belo Horizonte", "Recife"));
    //Outra maneira de definir constantes
    //Primeiro argumento, nome da constante
    //Segundo, dados
?>