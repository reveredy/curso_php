<div class="titulo">$_POST</div>
<form action="#" method="post">
    <!-- No método POST também é retornado um array
    O que determina a chave do array é o parâmetro "name" nas tags (input, por exemplo)
    E no caso do input o valor é passado como texto -->
    <input type="text" name="nome">
    <input type="text" name="sobrenome">
    <!-- No caso do select o name também é a chave -->
    <select name="estado">
        <!-- E o value selecionado é o valor dentro do array -->
        <option value="AC">Acre</option>
        <option value="BA">Bahia</option>
    </select>
    <button>Enviar</button> <!-- um button dentro de um form funciona como submit -->
</form>
<style>
    form > *{
        font-size: 1.8rem;
    }
</style>
<?php
    print_r($_POST);
?>