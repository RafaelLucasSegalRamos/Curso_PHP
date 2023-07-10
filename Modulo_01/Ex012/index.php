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
    
        $segundos = $_POST["seg"] ?? 0;
    ?>
    <main>
        <h1>Calculadora de tempo</h1>
        
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="seg">Coloque o tempo em segundos na caixa</label>
            <input type="number" name="seg" id="seg" value="<?=$segundos?>">
            <input type="submit" value="Calcular">
        </form>
        <div class="resultfinal">
            <h2>Totalizando a quantidade de tempo</h2>
            <?php
                print('<p>Em '.$segundos.' segundos temos:</p>');
                $ano = $segundos/31536000;
                $anos = $segundos%31536000;
                $mes = $anos/2592000;
                $meses = $anos%2592000;
                $semana = $meses/604800;
                $semanas = $meses%604800;
                $dia = $semanas/86400;
                $dias = $semanas%86400;
                $hora = $dias/3600;
                $horas = $dias%3600;
                $minuto = $horas/60;
                $minutos = $horas%60;
                $segundo = $minutos/1;
                $segundos = $minutos%1;
                print('<ul><li>Segundos: '.number_format($segundo, 0, ',', '.').'</li>');
                print('<li>Minutos: '.number_format($minuto, 0, ',', '.').'</li>');
                print('<li>Horas: '.number_format($hora, 0, ',', '.').'</li>');
                print('<li>Dias: '.number_format($dia, 0, ',', '.').'</li>');
                print('<li>Semanas: '.number_format($semana, 0, ',', '.').'</li>');
                print('<li>Meses: '.number_format($mes, 0, ',', '.').'</li>');
                print('<li>Anos: '.number_format($ano, 0, ',', '.').'</li>');

                ?>
        </div>
        
        <p><a href="../Ex013/">Proximo exercicio</a></p>
        <p><a href="../../">Voltar a pagina principal</a></p>
    </main>
</body>

</html>