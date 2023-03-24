<div class="titulo">Include</div>

<?php
    echo 'Executei essa linha do arquivo include<br>';
    include('include_arquivo.php');
    //Não é recomendado fazer mais de um include do mesmo arquivo
    //sem motivo, mas, se isso ocorrer e você tiver funções, você
    //pode proteger a redefinição dessa função fazendo um teste com um if() e a função function_exists
    
    //ficando assim: if(!function_exists){
    //                  function soma($a, $b){
    //                      return $a + $b;
    //                  }
    //              }

    //include('include_arquivo.php');
    echo soma(3, 8) . '<br>'; 

    echo "O conteúdo da variável é '{$variavel}'.";