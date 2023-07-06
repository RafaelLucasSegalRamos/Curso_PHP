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

            # Existem deversas formas de gerar um número aleatório em PHP
            $n1 = rand(0, 100);
            # A função rand() é uma delas, mas ela não é muito segura e é a mais lenta dentre todas
            # mas ela consegue gerar um número aleatório entre um valor mínimo e um valor máximo, mas o valor maximo não é necessário que seja o segundo parâmetro.
            
            echo "<div class=\"roller\">
                <p>O número gerado foi $n1 usando rand(\$min, \$max)</p>";
                $suc = $n1 + 1;
                $ant = $n1 - 1;
                echo "<p>A ordem fica $ant < $n1 < $suc</p>";
                
                # A função mt_rand() é mais segura e mais rápida que a rand()
                $n2 = mt_rand(0, 100);
                echo "<p>O número gerado foi $n2 usando mt_rand(\$min, \$max)</p>";
                $suc = $n2 + 1;
                $ant = $n2 - 1;
                echo "<p>A ordem fica $ant < $n2 < $suc</p>";
                
                # A função random_int() é a mais segura, mas mais lenta
                $n3 = random_int(0, 100);
                echo "<p>O número gerado foi $n3 usando random_int(\$min, \$max)</p>";
                $suc = $n3 + 1;
                $ant = $n3 - 1;
                echo "<p>A ordem fica $ant < $n3 < $suc</p>
            ";



            ?>
            </div>
            <button onclick="javascript:document.location.reload()" class="recarrega">&#x1F504;Recarregar</button>
        <p><a href="../Ex003/">Proximo exercicio</a></p>
        <p><a href="../../">Voltar a pagina principal</a></p>
    </main>
</body>
</html>