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
        $nome = "Gustavo";  // Apenas as variaveis podem ser alteradas, e são definidas por terem um cifrão na frente
        $idade = 43; // Variavel do tipo inteiro(int, integer)
        $peso = 118.5;  // Variavel do tipo float(numeros com virgula, decimal, double e real caso esteja na versão 7 do php)
        $casado = false; // Variavel do tipo booleano/bool(true ou false, e apenas esses dois valores)
        $num = 3e2; // O 'e' significa que é uma cotação cientifica, e o numero depois do 'e' é a quantidade de zeros que o numero terá
        $num2 = 0x1a; // O '0x' significa que é um numero hexadecimal, e o numero depois do '0x' é o numero em hexadecimal
        $num3 = 0b111101;   // O '0b' significa que é um numero binario, e o numero depois do '0b' é o numero em binario
        $num4 = 010;   // O '0' significa que é um numero octal, e o numero depois do '0' é o numero em octal


        var_dump($sobrenome); // A função var_dump mostra o tipo da variavel e o valor dela, e caso seja uma string mostra o tamanho dela entre parenteses
        echo "<br>";
        var_dump($nome);
        echo "<br>";
        var_dump($idade);
        echo "<br>";
        var_dump($peso);
        echo "<br>";
        var_dump($casado); // casado é um booleano, então se utilizado o echo/printf, ele irá mostrar 1 para true e nada para false
        echo "<br>";
        var_dump($num);
        echo "<br>";
        var_dump($num2);
        echo "<br>";
        var_dump($num3);
        echo "<br>";
        var_dump($num4);
        echo "<br>";
        //é possivel forçar uma variavel a mudar seu tipo fazendo o seguinte:
        $num = (int)$num; 
        var_dump($num); //o (int) forçou a variavel a deixar de ser um float, para ser do tipo inteiro
        echo "<br>O número é $num <br>";
        echo "O segundo número é $num2 <br>";
        echo "O terceiro número é $num3 <br>";
        echo "O quarto número é $num4 <br>";

        //No PHP tambem existem as variaveis Compostas e Especiais
        // Compostas são as Arrays e Objetos
        $vet = [3, 5, 8, 2.4, 'Rafael']; // Isto é um array, e é possivel criar arrays com a função array() ou com [], ele é parecido com a List do Python
        print("<br>"); 
        var_dump($vet);
        print("<br>");
        print("<br>");
        class Pessoa{ // Isto é um objeto, e é possivel criar objetos com a função new, é criado de uma forma parecida no python, tendo principal diferença o fato de que no python não é necessario declarar os atributos e não possui as chaves no final
            private string $n;
        }
        var_dump(new Pessoa()); 
        $teste = new Pessoa(); //-> O new serve para que uma classe possa ser instanciada, ou seja, para que um objeto possa ser criado ou chamada em uma variavel nova podendo repetir o processo em outras variaveis
        

        // Especiais são as Resources, Null, Callabe e Mixed, que não aparecerão agora.

    
        
    ?>
    <!-- Tembem pode funcionar <? ?>, mas alguns servidores não aceitarão este shortcut-->
    <br>
    <a href="../Aula5/">Link para proxima aula.</a>
    <p><a href="../../">Voltar a pagina principal</a></p>
</body>

</html>