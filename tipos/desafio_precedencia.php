<div class="titulo">Desafio Precedência</div>
<div>
<?php
    echo '<p>1. Qual o valor será impresso?</p>';
    echo '<p>2 + 5 * 3 + (12 / 6) / (-8 + 2 ** 3)</p><br>';
    echo '<p>Resposta: Erro, pois valor dividido por 0 gera erro</p>'
    //Nesse caso ele começa da esquerda, resolvendo os parenteses primeiro.
    // (12 / 2) = 2
    // (-8 + 2 ** 3) - Resolve primeiro a exp. 2**3 = 8, -8 + 8 = 0
    // 2 + 5 * 3 + 2 / 0
    //2 + 15 + 2 / 0
    //#erro, pois valor dividido por 0 gera erro
?>
</div>
<div>
    <h2><small>2. Qual expressão imprime o valor 100?</small></h2>
    <ul>
        <li><p>a: (1 + 2) * 20 - 15</p></li>
        <li><p>b: 4 * 5 ** 2</p></li>
        <li><p>c: 2 ** 3 ** 4 / 1e25</p></li>
        <li><p>d: 3 + (3 * 8) / 2 - 3</p></li>
    </ul>
    <ul>
        <h2>Respostas</h2>
        <li>
            <h3>Resolução A: (1 + 2) * 20 - 15</h3>
            <p>Passo 1: (1 + 2) = 3</p>
            <p>3 * 20 - 15</p>
            <p>Passo 2: 3 * 20 = 60</p>
            <p>60 - 15</p>
            <p>Resultado: <?= (1 + 2) * 20 - 15?></p>
        </li>
        <li>
            <h3>Resolução B: 4 * 5 ** 2</h3>
            <p>Passo 1: 5 ** 2 = 25</p>
            <p>4 * 25</p>
            <p>Resultado: <?= 4 * 5 ** 2 ?></p>
        </li>
        <li>
            <h3>Resolução C: 2 ** 3 ** 4 / 1e25</h3>
            <p>Não consegui resolver</p>
            <p>Resultado: <?= 2 ** 3 ** 4 / 1e25 ?></p>
        </li>
        <li>
            <h3>Resolução D: 3 + (3 * 8) / 2 - 3</h3>
            <p>Passo 1: (3 * 8) = 24</p>
            <p>3 + 24 / 2 - 3</p>
            <p>Passo 2: 24 / 2 = 12</p>
            <p>3 + 12 - 3</p>
            <p>Passo 3: 3 + 12 = 15</p>
            <p>15 - 3</p>
            <p>Resultado: <?= 3 + (3 * 8) / 2 - 3 ?></p>
        </li>
    </ul>
</div>