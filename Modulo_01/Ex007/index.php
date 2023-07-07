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
        $sala = $_POST["sala"] ?? 1380;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    ?>
    <main>
        <h1>Informe seu sálario</h1>
        
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="sala">Salário (em BRL) R$:</label>
            <input type="number" name="sala" id="sala" step="0.01" min="0" value="<?= $sala?>">
            <p style="font-size:1.4em;">Considerando o sálario minimo de: R$1.380,00</p>
            <input type="submit" value="Calcular">
        </form>
        <div class="resultfinal">
            <h2>Resultado Final</h2>
            <?php
                $salamin = 1380;
                $numsalamin = intdiv($sala, $salamin);
                $restosalamin = $sala%$salamin;
                echo "<p>Quem recebe um salário minimo de ".numfmt_format_currency($padrao, $sala, 'BRL')."
                recebe $numsalamin salário(s) mínimo(s) + ".numfmt_format_currency($padrao, $restosalamin, "BRL")."</p>";


            ?>
        </div>
        
        <p><a href="../Ex008/">Proximo exercicio</a></p>
        <p><a href="../../">Voltar a pagina principal</a></p>
    </main>
</body>

</html>