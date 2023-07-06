<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style2.css">
    <title>Exercicio 2</title>
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>

        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php
            $numero = rand(0, 100);
            
            echo "<p>O número gerado foi $numero</p>";
            $suc = $numero + 1;
            $ant = $numero - 1;
            echo "<p>A ordem fica $ant < $numero < $suc</p>";
            ?>
        <p><a href="../Ex003/">Proximo exercicio</a></p>
        <p><a href="../../">Voltar a pagina principal</a></p>
    </main>
</body>
</html>