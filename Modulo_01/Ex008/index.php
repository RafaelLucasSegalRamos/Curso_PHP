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
        $num = $_POST["num"] ?? 0;
        
    ?>
    <main>
        <h1>Analizando Raizes</h1>
        
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="num" class="grande">Digite um número para saber sua raiz quadrada e sua raiz cúbica:</label>
            <input type="number" name="num" id="num" step="0.01" min="0" value="<?= $num?>">
            
            <input type="submit" value="Calcular">
        </form>
        <div class="resultfinal">
            <h2>Resultado Final</h2>
            <?php
                echo "<p>Analizando o número<strong> $num</strong>, concluimos que:</p>";
                echo "<ul><li>A raiz quadrada de <strong>$num</strong> é <strong>".number_format(sqrt($num), 2)."</strong></li>";
                echo "<li>A raiz cúbica de <strong>$num</strong> é <strong>".number_format(pow($num, 1/3), 2)."</strong></li></ul>";


            ?>
        </div>
        
        <p><a href="../Ex009/">Proximo exercicio</a></p>
        <p><a href="../../">Voltar a pagina principal</a></p>
    </main>
</body>

</html>