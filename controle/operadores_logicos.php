<div class="titulo">Operadores Lógicos</div>
<?php
    echo "<p>V ou F</p>";
    var_dump(true);
    echo '<br>';
    var_dump(!true); //Negação lógica not(!)
    echo '<br>';
    echo '<p>Tabela Verdade "AND" (E)</p><hr>';
    var_dump(true && true); //TRUE
    var_dump(true && false); //FALSE
    var_dump(false && true); //FALSE
    var_dump(false && false); //FALSE
    var_dump(true and true); //TRUE
    var_dump(true and false); //FALSE
    var_dump(false and true); //FALSE
    var_dump(false and false); //FALSE

    echo '<p>Tabela Verdade "OR" (OU)</p><hr>';
    var_dump(true || true); //TRUE
    var_dump(true || false); //TRUE
    var_dump(false || true); //TRUE
    var_dump(false || false); //FALSE
    var_dump(true or true); //TRUE
    var_dump(true or false); //TRUE
    var_dump(false or true); //TRUE
    var_dump(false or false); //FALSE

    echo '<p>Tabela Verdade "XOR" (OU Exclusivo)</p><hr>';
    //Com o xor (OU exclusivo) será verdadeiro sempre que for
    //um OU outro verdadeiro, não podendo ser os 2
    var_dump(true xor true); //FALSE
    var_dump(true xor false); //TRUE
    var_dump(false xor true); //TRUE
    var_dump(false xor false); //FALSE
    var_dump(true != true); //FALSE
    var_dump(true != false); //TRUE
    var_dump(false != true); //TRUE
    var_dump(false != false); //FALSE
    
    echo '<p>Exemplo </p><hr>';
    $idade = 65;
    $sexo = "M";

    //Exemplo de uma expressão grande e complexa
    $pagouPrevidencia = true;
    $podeSeAposentar =$pagouPrevidencia && (($idade >= 60 && $sexo === "F") || ($idade >= 65 && $sexo === "M"));

    //Quando a expressão é muito grande ou complexa, podemos
    //quebrar em várias pequenas partes para ficar mais fácil a
    //leitura e compreensão
    $criterioMasculino = $idade >= 65 && $sexo === 'M';
    $criterioFeminino = $idade >= 62 && $sexo === 'F';
    $atingiuCriterio = $idade >= 62 && $sexo === 'F' || $idade >= 65 && $sexo === 'M';
    $podeAposentar = $atingiuCriterio && $pagouPrevidencia;
    echo "Pode se aposentar -> $podeAposentar. <br>";

    if($idade >= 60 && $sexo === "F"){
        echo "Pode se aposentar -> Sexo: $sexo, Idade: $idade";
    }else if($idade >= 65 && $sexo === "M"){
        echo "Pode se aposentar -> Sexo: $sexo, Idade: $idade";
    }else{
        echo "Vai ter que trabalhar mais um pouco...";
    }
?>

<style>
    p{
        margin-bottom: 0px;
        font-weight: 800;
    }

    hr{
        margin-top: 0px;
    }
</style>