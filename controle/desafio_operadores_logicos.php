<div class="titulo">Desafio Operadores Lógicos</div>
<!--
    Dois trabalhos -> terça e quinta!

    - Se os dois trabalhos forem executados -> TV 50` e Sorvete
    - Se apenas um for executado -> TV 32` e Sorvete
    - Se nenhum for executado -> Fica em casa mais saudável!
-->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select{
        font-size: 1.8rem;
    }
</style>

<?php
//Sempre que possível devemos testar a variável para não ocorrerem
//erros na hora de executar
//Nesse caso estamos testando se a variável $_POST tem algo
//armazenado, para então continuarmos com a execução
if(isset($_POST['t1'])){
    $jobTuesday = $_POST['t1'];
    $jobThusday = $_POST['t2'];
    if($jobTuesday && $jobThusday){
        echo '<div><p>No sábado compraremos a TV 50" e tomaremos sorvete no shopping</p></div>';
    }else if($jobTuesday xor $jobThusday){
        echo '<div><p>No sábado compraremos a TV 32" e tomaremos sorvete no shopping</p></div>';
    }else{
        echo '<div><p>No sábado ficaremos em casa, pois nenhum dos dois trabalhos deu certo.</p></div>';
    }
}     
?>