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
        $divi = $_POST["divi"] ?? 0;
        $divis = $_POST["divis"] ?? 1;
    ?>
    <main>

        <h1>Anatomia de uma divisão</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="divi">Digite o Dividendo(Número que será dividido):</label>
            <input type="number" name="divi" id="di" value="<?= $divi?>">
            <label for="divi">Digite o Divisor(Número que dividirá o dividendo):</label>
            <input type="number" name="divis" id="dio" value="<?= $divis?>">
            <input type="submit" value="Enviar">
        </form>

        <div class="divisao">
            <h2> ESTRUTURA DA DIVISÃO </h2>
            <table>
                <?php
                    echo "<tr>
                            <td>$divi</td>
                            <td class=\"espe1\">$divis</td>
                        </tr>
                        <tr>
                            <td> ".$divi%$divis."</td>
                            <td class=\"espe2\"> ".intdiv($divi, $divis)." </td>
                        </tr>";
                ?>
            </table>
        </div>
        <p><a href="../Ex007/">Proximo exercicio</a></p>
        <p><a href="../../">Voltar a pagina principal</a></p>
    </main>
</body>

</html>