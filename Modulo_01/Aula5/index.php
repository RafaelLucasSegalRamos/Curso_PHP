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
        $nome3 = "Gustavo $sobrenome \u{1F596}"; //Double Quoted String com variavel -> Quando tem aspas duplas e uma variavel, o php irá mostrar o valor da variavel
        $nome4 = 'Gustavo $sobrenome \u{1F596}'; //Single Quoted String com variavel -> Quando tem aspas simples e uma variavel, o php irá mostrar o nome da variavel
        $ano = date('Y'); //A função date('Y') mostra o ano atual, se colocar date('y') irá mostrar o ano atual com apenas 2 digitos
        //Para concatenar strings, pode ser utilizado o ponto(.), ou o igual(=), como no exemplo abaixo:
        $nome7 = $nome .' '. $sobrenome; //Concatenando a variavel $sobrenome com a variavel $nome5

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
        echo $nome7;
        echo "<br>";
        echo "<br>";
        echo "$nome \"Mestre do ensino da Progamação\" $sobrenome <br><br>"; // Utilizando o (\" )é possivel colocar dentro de uma string double quoted as aspas duplas, que é uma sequencia de escape
        //Para aspas Simples existem apenas (\'), mas para aspas duplas existem varias sequencias de escape, como por exemplo:
        //\n -> Quebra de linha
        //\t -> Tabulação -> Só funciana em Text Area.
        //\u{numaleatorio} -> Emoji
        //\\ -> Barra Invertida
        //\$ -> Dolar
        //\" -> Aspas duplas
        //\0 -> Null
        //\r -> Carriage Return
        //\v -> Vertical Tab
        //\e -> Escape
        //\f -> Form Feed
        //\x -> Caractere com base hexadecimal
        //\b -> Backspace
        //\o -> Caractere com base octal
        // E existem varias outras sequencias de escape, mas estas são as mais utilizadas

        

        //Para mostrar uma constante em uma Sring tem que ser utilizado o ponto(.)(Concatenação), como no exemplo abaixo:
        const ESTADO = 'SP';
        echo 'Eu moro em ' . ESTADO; //-> Este daqui Funciona
        echo "<br>";
        echo "<br>";
        echo "Eu moro em ESTADO";// -> Este daqui não Funciona
       
        //Isto é uma variavel do tipo string do tipo Heredoc:
        echo <<< FRASE
        <br> <br>
        não sei o que escrever aqui
        mas estou escrevendo
        e isso é o que importa

        estou estudando PHP em $ano
        FRASE;
        // Ele funciona como se fosse a tag <pre> </pre>, mas apenas se for no TextArea, no propio HTML ele só escreve como se fosse uma string normal do tipo double quoted
        //Isto é uma variavel do tipo string do tipo Nowdoc:
        echo <<< 'FRASE'
        <br> <br>
        não sei o que escrever aqui
        mas estou escrevendo
        e isso é o que importa

        estou estudando PHP em $ano
        FRASE;
        //Ele funciona de um jeito parecido com o heredoc, mas ele não interpreta variaveis, e nem sequencias de escape, ele apenas escreve o que está escrito, como se fosse uma string do tipo single quoted
        
    ?>
    <!-- Tembem pode funcionar <? ?>, mas alguns servidores não aceitarão este shortcut-->
    <br>
    <a href="../Aula6/">Link para proxima aula.</a>
</body>

</html>