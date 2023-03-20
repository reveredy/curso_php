<div class="titulo">Desafio Palíndromo</div>
<!-- 
    Enunciado

    Detectar se uma palavra é ou não um palíndromo
    Realizar isso de duas maneiras
    
    1- Usando um laço for
    2- Usando alguma função da String
 -->
    <form action="#" method="post">
        <div class="palavra">
            <label for="nome">Palavra</label>
            <input type="text" id="nome" name="palavra">
        </div>
        <button>Enviar</button>
    </form>
    <?php
        //Primeira maneira, usando for
        function palindromo($palavra){
            $novaPalavra = '';

            for($i = strlen($palavra); $i >= 0; $i--){
                $novaPalavra .= $palavra[$i];

                $resposta = $novaPalavra === $palavra ?
                "Essa palavra é um palíndromo" :
                "Essa palavra não é um palíndromo";
            }
            return $resposta;
        }
        
        if(isset($_POST['palavra'])) echo palindromo($_POST['palavra']);

        echo "<br>";

        //Segunda maneira, usando um método de string
        function testePalindromo($palavra){
            return $palavra === strrev($palavra) ? 
            "Essa palavra \"$palavra\" é um palíndromo" :
            "Essa palavra \"$palavra\" não é um palíndromo";
        }

        if(isset($_POST['palavra'])) echo testePalindromo($_POST['palavra']);
    ?>
    <style>
        .palavra{
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 5px;
        }

        .palavra > label{
            font-size: 1.2rem;
        }

        button{
            font-size: 1.2rem;
            padding: 0 20px;
        }
    </style>