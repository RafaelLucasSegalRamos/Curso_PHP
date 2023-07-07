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
            $numero = $_GET['nume'] ?? 0;
            $suc = $numero + 1;
            $ant = $numero - 1;
            echo "<p>A ordem fica $ant < $numero < $suc</p>";
            ?>
            <p><a href="javascript:history.go(-1)">Voltar para pagina anterior</a></p>
    </main>
</body>

</html>