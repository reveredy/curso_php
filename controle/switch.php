<div class="titulo">Switch</div>

<?php
    $categoria = 'Luxo';
    $preco = 0.0;
    $carro = '';

    if($categoria === 'Luxo'){
        $preco = 250000;
        $carro = 'Mercedes';
    }else if($categoria === 'SUV'){
        $preco = 80000;
        $carro = "Renegade";
    }else if($categoria === 'Sedan'){
        $carro = 'Etios';
        $preco = 55000;
    }else{
        $carro = 'Mobi';
        $preco = 33000;
    }

    $precoFormatado = number_format($preco, 2, ',', '.');
    //number_format(valor, quantidade de casas decimais, delimitador de casas decimais, e separador de milhares)

    echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>";

    $categoria = "Luxo";
    switch($categoria){
        case "Luxo":
            $carro = "Mercedes";
            $preco = 250000;
            break;
        case "SUV":
        case "SUV Básico":
            $carro = "Renegade";
            $preco = 80000;
        case "Sedan":
            $carro = "Etios";
            $preco = 55000;
            break;
        default:
            $carro = "Mobi";
            $preco = 33000;
    }

    $precoFormatado = number_format($preco, 2, ',', '.');
    echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>"

?>