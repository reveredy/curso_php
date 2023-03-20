<div class="titulo">Usando Tipos</div>

<?php
    //No primeiro caso ele aceitara todos os tipos e retornará a resposta com o tipo passado
    function somar1($a, $b){
        echo "<span>Somando $a + $b = </span>";
        return $a + $b;
    }

    echo somar1(1, 2) . '<br>'; //retorno: int(3)
    echo somar1(1.7, 2.5) . '<br>';//retorno: float(4.2)
    echo somar1(1, '4dois') . '<br>';//retorno: int(5)

    echo "<br>";
    
    //Nesse caso estamos passando para o php que qualquer tipo
    //que entrar será convertido int, e o retorno obrigatóriamente será um int tbm
    function somar2(int $a, int $b){
        echo "<span>Somando $a + $b = </span>";
        return $a + $b;
    }
    
    echo somar2(1, 2) . '<br>';// retorno: int(3)
    echo somar2(1.7, 2.5) . '<br>';//retorno int(3)
    //A hora q o 1.7 entrar na função ele já será convertido para int, assim ele é truncado, de float(1.7) passa a ser um int(1)
    //A hora q o 2.5 entrar na função ele já será convertido para int, assim ele é truncado, de float(2.5) passa a ser um int(2)
    //retornando int(3)
    // echo somar2(1, '4dois') . '<br>';//retorno: erro, php não conseguiu converter pois o 4dois estavam juntas, ele converteria se fosse somente a string 4
    
    echo "<br>";

    //Aqui estamos avisando o php que o retorno será do tipo int
    // então entram as variáveis normais, cada uma com seu tipo
    // e somente na hora de retornar que elas são convertidas para o tipo int
    function somar3($a, $b): int{
        echo "<span>Somando $a + $b = </span>";
        return $a + $b;
    }

    echo somar3(1, 2) . '<br>';//retorno int(3)
    echo somar3(1.7, 2.5) . '<br>';//retorno int(4)
    //Aqui os valores entram como float normal, é feita a soma como float.
    //Somente na hora de retornar que o valor é truncado para int
    echo somar3(1, '4dois') . '<br>';//retorno: int(5)
?>