<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style2.css">
    
    <title>Funções matemáticas</title>
</head>
<body>
    <main>
        
            <?php
               # No PHP os operadores de concatenção e de adição são diferentes, o de concatenação é o ponto (.) e o de adição é o sinal de mais (+). Por isso quando tentamos somar uma string com outra string, o PHP não entende que queremos concatenar e sim somar, por isso ele retorna nada. Mas se tentarmos somar um número dentro de uma string com outro número dentro de uma string, o PHP entende que queremos somar e retorna o resultado da soma como um valor inteiro ou como float depende se o resultado da operação já era decimal ou não.
               # No PHP 7 ou anterior a soma de duas strings que não tinha nenhum número dentro delas, retornava 0, mas no PHP 8 isso foi alterado e agora retorna um erro.
               # Outra curiosidade do PHP 7 é que caso soma-se uma string com um número e com uma palavra dentro e soma-se com outra com as mesmas caracteristicas, o PHP retornava o número somado entre os dois números nas duas strings iginorando a palavra, mas no PHP 8 isso foi alterado e agora retorna um erro.

                # Exemplo de soma de strings com números dentro delas.
                echo "<p>Exemplo de soma de strings com números dentro delas.</p><br>";
                echo "<div class=\"roller\"><p>Exemplo 1: " . "10" + "10" . "<br></p>";
                echo "<p>Exemplo 2: " . "10.5" + "10.5" . "<br></p>";
                echo "<p>Exemplo 3: " . "10" + "10.5" . "<br></p>";
                echo "<p>Exemplo 4: " . "10.5" + "10" . "</p><br></div>";

                # Aqui estam os exemplos de operadores aritiméticos.

                echo "<p>Exemplo de operadores aritiméticos.</p><br>"; 
                echo "<div class=\"roller\"><p>Exemplo 1 10 + 10: " . 10 + 10 . "<br></p>"; # Aqui o PHP entende que queremos somar e retorna o resultado da soma como um valor inteiro.
                echo "<p>Exemplo 2 10 - 10: " . 10 - 10 . "<br></p>"; # Aqui o PHP entende que queremos subtrair e retorna o resultado da subtração como um valor inteiro.
                echo "<p>Exemplo 3 10 * 10: " . 10 * 10 . "<br></p>"; # Aqui o PHP entende que queremos multiplicar e retorna o resultado da multiplicação como um valor inteiro.
                echo "<p>Exemplo 4 10 / 10: " . 10 / 10 . "<br></p>"; # Aqui o PHP entende que queremos dividir e retorna o resultado da divisão como um valor inteiro.
                echo "<p>Exemplo 5 10 % 10: " . 10 % 10 . "<br></p>"; # Aqui o PHP entende que queremos o resto da divisão e retorna o resto da divisão como um valor inteiro.
                echo "<p>Exemplo 5.5 10 % 3: " . 10 % 3 . "<br></p>"; # Aqui o PHP entende que queremos o resto da divisão e retorna o resto da divisão como um valor inteiro.
                echo "<p>Exemplo 6 10 ** 10: " . 10 ** 10 . "<br></p>"; # Aqui o PHP entende que queremos elevar e retorna o resultado da elevação como um valor inteiro.
                echo "<p>Exemplo 6.5 10 ** (1/2): " . 10 ** (1/2) . "<br></p></div>"; # Aqui o PHP entende que queremos elevar e retorna o resultado da elevação como um valor inteiro, mas como fazemos isso com um valor fracionado o PHP faz a radical do número.

                
            ?>
        </div>
        <p><a href="../Aula10/">Link para proxima aula.</a></p>
        <p><a href="../../">Voltar a pagina principal</a></p>
    </main>
    
</body>
</html>
