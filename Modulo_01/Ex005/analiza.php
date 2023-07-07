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
    
            $num = $_POST['nume'] ?? 0;

            # verificador se o valor é float  e separar a parte decimal da parte inteira
            
            echo "<p>O Número <strong>".number_format($num,3,",",".")."</strong> está sendo analizado...</p>";

            $int = (int) $num; // transformando a variavel em inteiro fez com que a parte decimal fosse descartada, por isso sobrando apenas a parte inteira do número.
            $fra = $num - $int; // Ao subitrair o valor inteiro do valor original, sobra apenas a parte decimal do número.

            echo "<p>Parte inteira: <strong>".number_format($int, 0, ',','.')."</strong></p>";
            echo "<p>Parte fracionária: <strong>".number_format($fra, 3, ',', '.')."</strong></p>";
            ?>
            <p><a href="javascript:history.go(-1)">Voltar para pagina anterior</a></p>
    </main>
</body>

</html>