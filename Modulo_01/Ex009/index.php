<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style2.css">
    <title>Document</title>
</head>

<body>
    <?php
        $num1 = $_POST["num1"] ?? 0;
        $num2 = $_POST["num2"] ?? 0;
        $pes1 = $_POST["pes1"] ?? 1;
        $pes2 = $_POST["pes2"] ?? 1;

        
    ?>
    <main>
        <h1>Médias Aritiméticas</h1>
        
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="num">1° Número</label>
            <input type="number" name="num1" id="num1" min="0" value="<?= $num1?>" required>
            <label for="num">2° Número</label>
            <input type="number" name="num2" id="num2" min="0" value="<?= $num2?>" required>
            <label for="num">1° Peso</label>
            <input type="number" name="pes1" id="pes1" min="1" value="<?= $pes1?>">
            <label for="num">2° Peso</label>
            <input type="number" name="pes2" id="pes2" min="1" value="<?= $pes2?>">
            
            <input type="submit" value="Calcular">
        </form>
        <div class="resultfinal">
            <h2>Calculo de Médias</h2>
            <?php
                echo "<p>Analizando os números <strong>$num1</strong> e <strong>$num2</strong>, concluimos que:</p>";
                echo "<ul><li>A média aritimética é <strong>".number_format(($num1 + $num2) / 2, 2, ',', '.')."</strong></li> <li>A média ponderada é <strong>".number_format(($num1 * $pes1 + $num2 * $pes2) / ($pes1 + $pes2), 2, ',', '.')."</strong></li></ul>";
            ?>
        </div>
        
        <p><a href="../Ex010/">Proximo exercicio</a></p>
        <p><a href="../../">Voltar a pagina principal</a></p>
    </main>
</body>

</html>