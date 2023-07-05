<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
    <style>
    body {
        background-color: #222;
        color: #fff;
    }

    a {
        color: lightblue;
    }

    a:visited {
        color: lightblue;
        font-weight: bolder;
    }
    </style>
</head>

<body>
    <h1>Mostrando o tipo Primitivo de Variaveis</h1>

    <?php
        $sobrenome = "Guanabara"; // Variavel do tipo String

        //No PHP existem 4 tipos de strings, que são:
        $nome = "Gustavo"; //Double Quoted String(Pois possui aspas duplas)
        $nome2 = 'Gustavo'; //Single Quoted String(Pois possui aspas simples)
        $nome3 = "Gustavo $sobrenome"; //Double Quoted String com variavel -> Quando tem aspas duplas e uma variavel, o php irá mostrar o valor da variavel
        $nome4 = 'Gustavo $sobrenome'; //Single Quoted String com variavel -> Quando tem aspas simples e uma variavel, o php irá mostrar o nome da variavel
        $nome5 = "Gustavo "; //HereDoc String
        $nome6 = 'Gustavo '; //NowDoc String
        //Para concatenar strings, pode ser utilizado o ponto(.), ou o igual(=), como no exemplo abaixo:
        $nome7 = $nome . $sobrenome; //Concatenando a variavel $sobrenome com a variavel $nome5

        echo $nome;
        echo "<br>";
        echo "<br>";
        echo $nome2;
        echo "<br>";
        echo "<br>";
        echo $nome3;
        echo "<br>";
        echo "<br>";
        echo $nome4;
        echo "<br>";
        echo "<br>";
        echo $nome5;
        echo "<br>";
        echo "<br>";
        echo $nome6;
        echo "<br>";
        echo "<br>";
        echo $nome7;
        echo "<br>";
        echo "<br>";
       
    ?>
    <!-- Tembem pode funcionar <? ?>, mas alguns servidores não aceitarão este shortcut-->
    <br>
    <a href="../Aula6/">Link para proxima aula.</a>
</body>

</html>