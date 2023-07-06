<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style2.css">
    <title>Document</title>
</head>

<body>
    <main>

    
            <?php
    
            $valoReal = $_POST['nume'] ?? 0;
            $valoEUA = $valoReal / 4.93;
            $valoEUA = number_format($valoEUA, 2, ',', '.');
            echo "<p>O valor R\$$valoReal em reais é R$ $valoEUA</p>";
            $valoEuro = $valoReal / 5.36;
            $valoEuro = number_format($valoEuro, 2, ',', '.');
            echo "<p>O valor R\$$valoReal em euros é € $valoEuro</p>";

            ?>
            <p><a href="javascript:history.go(-1)">Voltar para pagina anterior</a></p>
    </main>
</body>

</html>