<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #222;
            color: #fff;
        }
        a
        {
            color: lightblue;
        }
        a:visited{
            color: lightblue;
            font-weight: bolder;
        }
    </style>
</head>
<body>
    <h1>Olá Mundo!</h1>
    
    <?php
        date_default_timezone_set('America/Sao_Paulo');

        print('Horários e Datas:');
        echo 'Hoje é dia:'. date("D/M/Y");
        echo '<br>E são :'. date("G:i:s T");
    ?>
    <!-- Tembem pode funcionar <? ?>, mas alguns servidores não aceitarão este shortcut-->
    <br>
    <a href="../Aula3/">Link para proxima aula.</a>
    <p><a href="../../">Voltar a pagina principal</a></p>
</body>
</html> 