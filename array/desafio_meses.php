<div class="titulo">Desafio Meses</div>
<?php
//Os arrays começam com índice 0, o nosso desafio consiste em:
//Fazer com que cada mês fique com o índice em que estamos acostumados a usar
//Por exemplo: Janeiro é conhecido como mês 1
$meses = array(
    1 => "Janeiro",
    "Fevereiro",
    "Março",
    "Abril",
    "Maio",
    "Junho",
    "Julho",
    "Agosto",
    "Setembro",
    "Outubro",
    "Novembro",
    "Dezembro"
);

//Para isso bastou alterar o primeiro índice para 1 que o resto acompanha

print_r($meses[2]);
?>