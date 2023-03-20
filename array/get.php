<div class="titulo">$_GET</div>
<?php
    print_r($_GET);
    //o $_GET é um array
    //para conseguirmos colocar dados nele devemos usar os parâmetros
    //na url da página: Logo após o link da página
    //colocamos um "?" seguido do parâmetro desejado
    //o primeiro é a chave que vem no array ex: nome=leo
    //Para passarmos mais de um parâmetro usamos o "&" para
    //irmos para o próximo e assim passando ele também

    echo "<br>{$_GET['nome']}";
    //Podemos acessar normalmente atraves das chaves
?>