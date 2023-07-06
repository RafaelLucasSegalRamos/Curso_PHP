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
            $valoEuro = $valoReal / 5.36;
            # Para utilizar o number_format() é necessário que o valor seja um float ou um double, e assim podemos definir os parametros que fica: number_format(valor, casas decimais, separador decimal, separador de milhar)

            // $valorReal = number_format($valoReal, 2, ',', '.');
            
            //$valorEUA = number_format($valoEUA, 2, ',', '.');

            //$valorEuro = number_format($valoEuro, 2, ',', '.');

            // Existe uma outra forma de formatar os números que envolve a intercionalização, que precisa fazer o que for feito abaixo:
            
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            # Utilizando essa formatação feito na variavel padrão podemos utilizar a função numfmt_format_currency() que recebe 3 parametros: a variavel padrão, o valor a ser formatado e a moeda que será utilizada. Fazendo isso podemos formatar o valor para qualquer moeda que quisermos.

            // para fazer isso tive que instalar a extensão intl no php.ini, que na verdade já estava instalada, só precisei descomentar a linha que estava comentada. Se por um acaso seu programa esteja dando erro mesmo com tudo igual de uma olhada no php.ini, pois pode ser que a extensão não esteja instalada ou esteja comentada e por isso não funciona.
           
           
            echo "<p>O valor ".numfmt_format_currency($padrao, $valoReal, "BRL")." em reais é ". numfmt_format_currency($padrao, $valoEUA, "USD")."</p>";
            
            echo "<p>O valor ".numfmt_format_currency($padrao, $valoReal, "BRL")." em euros é  ".numfmt_format_currency($padrao, $valoEuro, "EUR")."</p>";

            ?>
            <p><a href="javascript:history.go(-1)">Voltar para pagina anterior</a></p>
    </main>
</body>

</html>