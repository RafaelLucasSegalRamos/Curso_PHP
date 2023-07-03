<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #fff;
            color: #000;
        }
    </style>
</head>
<body>
    <h1>Olá Mundo!</h1>
    <?php
        $teste = 'Mundo';
        echo "<p>Olá $teste!</p>";
        print("<p>Olá $teste!</p>");
    ?>
    <!-- Tembem pode funcionar <? ?>, mas alguns servidores não aceitão este shortcut-->
    <p>Pronto! Me livrei de uma maldição!</p>
</body>
</html>