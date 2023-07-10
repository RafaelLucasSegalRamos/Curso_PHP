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
        $dinsaq = $_POST["saque"] ?? 0;
        
    ?>
    <main>
        <h1>Caixa eletronico</h1>
        
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="saque">Qual o valor a ser sacado?</label>
            <input type="number" name="saque" id="saque" value="<?=$dinsaq?>">
            <input type="submit" value="Calcular">
        </form>
        <div class="resultfinal">
            <h2>O saque de R$<?=number_format($dinsaq, 2, ',', '.')?></h2>
            <p>O caixa eletronico irá lhe entregar as seguintes notas: </p>
            <?php
                
                $notas100 = intdiv($dinsaq, 100); 
                $notas50 = intdiv($dinsaq % 100, 50); 
                $notas20 = intdiv(($dinsaq % 100) % 50, 20);
                $notas10 = intdiv((($dinsaq % 100) % 50) % 20, 10);
                $notas5 = intdiv(((($dinsaq % 100) % 50) % 20) % 10, 5);
                $notas2 = intdiv((((($dinsaq % 100) % 50) % 20) % 10) % 5, 2);
                $moedas1 = intdiv((((($dinsaq % 100) % 50) % 20) % 10) % 5, 1);

                echo "<ul><li>x$notas100 notas de R$100,00</li>";
                echo "<li>x$notas50 notas de R$50,00</li>";
                echo "<li>x$notas20 notas de R$20,00</li>";
                echo "<li>x$notas10 notas de R$10,00</li>";
                echo "<li>x$notas5 notas de R$5,00</li>";
                echo "<li>x$notas2 notas de R$2,00</li>";
                echo "<li>x$moedas1 moedas de R$1,00</li></ul>";
                ?>
        </div>
        
        <p><a href="../Ex013/">Proximo exercicio</a></p>
        <p><a href="../../">Voltar a pagina principal</a></p>
    </main>
</body>

</html>