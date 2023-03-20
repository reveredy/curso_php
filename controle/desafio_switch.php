<div class="titulo">Desafio Switch</div>
<form action="#" method="post">
        <input type="text" name="param">
        <select name="conversao" id="conversao">
            <option value="km-milha">Km > Milha</option>
            <option value="milha-km">Milha > Km</option>
            <option value="metro-km">Metros > Km</option>
            <option value="km-metro">Km > Metros</option>
            <option value="grausC-f">Celsius > Fahrenheit</option>
            <option value="grausF-c">Fahrenheit > Celsius</option>
        </select>
        <button>Calcular</button>
</form>
<style>
    form > *{
        font-size: 1.8rem;
    }
</style>
<?php
if(isset($_POST['param'])){
    $valor = $_POST['param'];
    $tipoConversao = $_POST['conversao'];

    switch(strtolower($tipoConversao)){
        case 'km-milha':
            $resultadoConversao = $valor * 0.621371;
            $msg = "$valor km(s) = $resultadoConversao milha(s)";
            break;
        case 'milha-km':
            $resultadoConversao = $valor * 1.60934;
            $msg = "$valor milha(s) = $resultadoConversao km(s)";
            break;
        case 'metro-km':
            $resultadoConversao = $valor * 0.001;
            $msg = "$valor metro(s) = $resultadoConversao km(s)";
            break;
        case 'grausc-f':
            $resultadoConversao = $valor * 1.8 + 32;
            $msg = "$valor celsius = $resultadoConversao fahrenheit";
            break;
        case 'grausf-c':
            $resultadoConversao = ($valor - 32) / 1.8;
            $msg = "$valor fahrenheit = $resultadoConversao celsius";
            break;
            default:
            $resultadoConversao = $valor * 1000;
            $msg = "$valor km(s) = $resultadoConversao metro(s)";
    }
    echo "<p>$msg</p>";
}
?>