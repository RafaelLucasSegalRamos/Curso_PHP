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
        $porcentagem = $_POST["ran"] ?? 0; 
        $preco = $_POST["preco"] ?? 0;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    ?>
    <main>
        <h1>Reajustador de preços</h1>
        
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="preco">Preço do produto(R$)</label>
            <input type="number" name="preco" id="preco" placeholder="0" value="<?=$preco?>">
            <label for="ran">Porcentagem de reajuste(<strong><span id="p"><?=$porcentagem?></span>%</strong>)</label>
            <input type="range" name="ran" id="ran" maxlength="100" value="<?=$porcentagem?>" oninput="MudaValor()">
            
            <input type="submit" value="Calcular">
        </form>
        <div class="resultfinal">
            <h2>Resultado do Reajusate</h2>
            <?php
                echo "<p>O preço ". numfmt_format_currency($padrao, $preco, "BRL")." com o reajuste de $porcentagem% agora feito, agora será: ".numfmt_format_currency($padrao, $preco+($preco*($porcentagem/100)), "BRL")."</p>";
            ?>
        </div>
        
        <p><a href="../Ex012/">Proximo exercicio</a></p>
        <p><a href="../../">Voltar a pagina principal</a></p>
    </main>
</body>
    <script>
        function MudaValor(){
            p.innerText = ran.value;

        }
    </script>
</html>