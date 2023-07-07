<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style2.css">

    <title>Aqrquivo PHP retro alimintado</title>
</head>

<body>
    <?php 
    $n1 = $_POST["n1"] ?? 0;
    $n2 = $_POST["n2"] ?? 0;
    ?>
    <main>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
                    <!-- <.?= ?> pode repetir  o caminho atual do arquivo, assim fazendo a retro alimentação.-->
            <h1>Formulario de soma</h1> 
            <label for="n1">Digite um valor:</label>
            <input type="number" name="n1" id="n1" value="<?="$n1"?>">
            <label for="n2">Digite um segundo valor:</label>
            <input type="number" name="n2" id="n2" value="<?="$n2"?>">
            <input type="submit" value="Enviar">
        </form>
        <?php
        
            $soma = $n1 + $n2;
            echo "<p>A soma entre $n1 e $n2 é igual a $soma</p>";

        ?>
        <p><a href="../Aula12/">Link para proxima aula.</a></p>
        <p><a href="../../">Voltar a pagina principal</a></p>
    </main>

</body>

</html>