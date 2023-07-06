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
        $teste = 'Mundo';
        echo "<p>Olá $teste\u{1F30E}! Utilizando o echo</p>";
        print("<p>Olá $teste\u{1F30E}! Utilizando o print</p>");
        // phpinfo(); Dá pra utilizar para ver as configurações do Server que foi instalado o PHP
    ?>
    <a href="../Aula2/">Link para proxima aula.</a>
    <!-- Tembem pode funcionar <? ?>, mas alguns servidores não aceitarão este shortcut-->
    <p>Pronto! Me livrei de uma maldição!</p>
    <p><a href="../../">Voltar a pagina principal</a></p>
</body>
</html> 