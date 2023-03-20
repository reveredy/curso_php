<div class="titulo">Constantes</div>

<?php
    //Para usarmos constantes em PHP não podemos colocar o $ junto

    //Apenas o nome para ler a constante
    define('TAXA_DE_JUROS', 5.9);
    echo TAXA_DE_JUROS;

    const NOVA_TAXA = 2.5;
    echo'<br>', NOVA_TAXA;

    $valorVariavel = 2.8;
    //Para salvarmos o valor de uma variável dentro de uma
    //constante, devemos usar o define()
    define('NOVISSIMA_TAXA', $valorVariavel);
    //const NOVISSIMA_TAXA = $valorVariavel;
    //const NOVISSIMA_TAXA = 2.8 + 1.2; //Podemos fazer uma operação aritmética em uma constante
    echo "<br>", NOVISSIMA_TAXA;

    //Algumas constantes que existem no PHP são:
    echo '<br>', PHP_VERSION;
    echo '<br>', PHP_INT_MAX;
    echo '<br>', __LINE__;
    echo '<br>', __FILE__;
    echo '<br>', __DIR__;
    ?>