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
        $datatoday = date("Y");
        $data = $_POST["year"] ?? $datatoday;
        $anonas = $_POST["anonas"] ?? 0;
    ?>
    <main>
        <h1>Calculadora de Idade</h1>
        
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="anonas">Em que ano você nasceu?</label>
            <input type="number" name="anonas" id="anonas" value="<?=$anonas?>" max="<?=$datatoday-1?>">
            <label for="year" class="grande">Quer saber sua idade para que ano?(Atualmete estamos em <?=$datatoday?>)</label>
           <input type="number" name="year" id="year" value="<?=$data?>">
            
            <input type="submit" value="Calcular">
        </form>
        <div class="resultfinal">
            <h2>Calculo de Idade</h2>
            <?php
                $idade = $data - $anonas;
                print("<p>Quem nasceu em $anonas tem $idade anos em $data</p>");
            ?>
        </div>
        
        <p><a href="../Ex011/">Proximo exercicio</a></p>
        <p><a href="../../">Voltar a pagina principal</a></p>
    </main>
</body>

</html>