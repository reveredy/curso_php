<div class="titulo">Desafio</div>

<ul>
    <?= "<li>1 + 1 = 2</li>"?>
    <!-- Como a intenção do desafio é passar o valor
        de uma forma mais dinamica, o ideal seria envolver
        somente o resultado em php
    -->
    <li>4 + 4 = <?php echo 4 + 4?></li>
    <li>8 + 8 = <?= 8 + 8?></li>
</ul>