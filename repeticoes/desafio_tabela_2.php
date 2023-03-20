<div class="titulo">Desafio Tabela #2</div>
<form action="#" method="post">
    <div class="label">
    <label for="tr">Núm. Linhas</label>
    <input type="text" name="tr" id="tr" value=<?= $_POST['tr'] ?? 5 ?>>
    </div>
    <div class="label">
    <label for="td">Núm. Colunas</label>
    <input type="text" name="td" id="td" value=<?= $_POST['td'] ?? 5 ?>>
    </div>
    <button>Enviar</button>
</form>
<table>
    <?php
        if($_POST['tr'] && $_POST['td']){
            $linhas = intval($_POST['tr']);
            $colunas = intval($_POST['td']);
            $cont = 1;

            for($i = 0; $i < $linhas; $i++){
                echo "<tr>";
                for($j = 1; $j <= $colunas; $j++){
                    echo "<td>$cont</td>";
                    $cont++;
                }
                echo "</tr>";
            }
        }
    ?>
</table>
<style>
    .label {
        display: flex;
        flex-direction: column;
        gap: 5px;
        margin-bottom: 15px;
        align-items: flex-start;
    }

    .label > label{
        font-size: 1.3rem;
    }

    input, button{
        font-size: 1.2rem;
        padding: 8px 25px;
    }

    table{
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0;
    }
    table tr{
        border: 1px solid #444;
    }

    table td{
        padding: 10px 20px;
    }
</style>