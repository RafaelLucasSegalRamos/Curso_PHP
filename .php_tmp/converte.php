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
        date_default_timezone_set('America/Sao_Paulo');

        $data = date('m-d-Y');
        $dataumasem = date('m-d-Y', strtotime('-7 days'));
        // echo "<p> Data de hoje: $data </p>";
        // echo "<p> Data de uma semana atrás: $dataumasem </p>";

        // API do Banco Central do Brasil
        // Do dollar
        $URL = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $dataumasem . '\'&@dataFinalCotacao=\'' . $data . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        // Do Euro
        $URLEURO = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoMoedaPeriodo(moeda=@moeda,dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@moeda=\'EUR\'&@dataInicial=\'' . $dataumasem . '\'&@dataFinalCotacao=\'' . $data . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($URL), true);
        $dadosEURO = json_decode(file_get_contents($URLEURO), true);

        $valoReal = $_POST['nume'] ?? 0;

        $valoEuro = $valoReal / $dadosEURO["value"][0]["cotacaoCompra"];
        $valoEUA = $valoReal / $dados["value"][0]["cotacaoCompra"];

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "<p>O valor " . numfmt_format_currency($padrao, $valoReal, "BRL") . " em reais é " . numfmt_format_currency($padrao, $valoEUA, "USD") . "</p>";

        echo "<p>O valor " . numfmt_format_currency($padrao, $valoReal, "BRL") . " em euros é  " . numfmt_format_currency($padrao, $valoEuro, "EUR") . "</p>";

        ?>
        <p><a href="javascript:history.go(-1)">Voltar para pagina anterior</a></p>
    </main>
</body>

</html>