<div class="titulo">Operações Aritméticas</div>

<?php
    echo 1 + 1, '<br>';
    var_dump(1 + 1); //valor será inteiro
    echo '<br>';
    
    echo 1 + 2.5, '<br>';
    var_dump(1 + 2.5); //valor será float
    echo '<br>';

    echo 10 - 2, '<br>';
    var_dump(10 - 2); //8 inteiro
    echo '<br>';

    echo 2 * 5, '<br>';
    var_dump(2 * 5); //10 inteiro
    echo '<br>';

    echo 7 / 4, '<br>';
    var_dump(7 / 4); //valor será float
    echo '<br>';

    echo intdiv(7, 4), '<br>';
    var_dump(intdiv(7, 4)); //valor será inteiro(resultado = 1)
    echo '<br>';

    echo round(7/ 4), '<br>';
    var_dump(round(7/ 4)); //valor será arredondado, se for menor metade do valor arredondado para baixo, se for maior que metade arredondado para cima
    echo '<br>';

    echo 7 % 4, '<br>';
    var_dump(7 % 4); //Valor é o resto da divisão (resultado = 3)
    echo '<br>';

    echo 7 % 2, '<br>';
    var_dump(7 % 2); //É bastante usado também para sabermos se um número é par ou ímpar(se o resultado for igual a 1 é ímpar)
    echo '<br>';

    echo 8 % 2, '<br>';
    var_dump(8 % 2); //É bastante usado também para sabermos se um número é par ou ímpar(se o resultado for igual a 0 é par)
    echo '<br>';

    //echo 7 % 0, '<br>'; //Retorna erro
    
    //echo intdiv(7, 0); //Quando for uma divisão inteira por 0 ele gera um #erro!

    echo 4 ** 3, '<br>'; 
    //Exponenciação, resultado = 64.
    //Número x ele mesmo por tantas x
    //4*4 = 16 -> 16*4 = 64;
    var_dump(4**3);
    echo '<br>';

    // Precedência de Operadores:
    // () => ** => / * % => + -

    echo '<p>Precedência</p>';
    echo 2 + 3 * 4, '<br>'; // 14
    echo (2 + 3) * 4, '<br>'; // 20
    echo 2 + 3 * 4 ** 2, '<br>'; // 50
    echo ((2 + 3) * 4) ** 2, '<br>'; // 400
    // A conta é feita do parenteses mais interno para o mais externo
    
?>