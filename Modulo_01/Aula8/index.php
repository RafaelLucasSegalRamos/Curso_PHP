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
        <div class="roller">
            <?php
                //  abs() -> retorna o valor absoluto, o valor absoluto é o valor mas sem o sinal, ou seja  -10 = 10 50 = 50 e assim por diante.
                echo "<p>'abs(-10)' retorna: " . abs(-10) . "<br></p>";
                echo "<p>'abs(50)' retorna: " . abs(50) . "<br></p>";
                // base_convert() -> converte um numero de uma base para outra, sendo a base 10 a base decimal, a base 2 a base binaria, a base 8 a base octal e a base 16 a base hexadecimal.
                echo "<p>'base_convert(10, 10, 2)' retorna: " . base_convert(3, 10, 2) . "<br></p>";
                echo "<p>'base_convert(10, 10, 8)' retorna: " . base_convert(10, 10, 8) . "<br></p>";
                // ceil() -> arredonda um numero para cima, ou seja, se o numero for 1.1 ele retorna 2, se for 1.9 ele retorna 2;
                echo "<p>'ceil(1.1)' retorna: " . ceil(1.1) . "<br></p>";
                // floor() -> arredonda um numero para baixo, ou seja, se o numero for 1.1 ele retorna 1, se for 1.9 ele retorna 1;
                echo "<p>'floor(1.1)' retorna: " . floor(1.1) . "<br></p>";
                //round() -> arredonda um numero para o mais proximo, ou seja, se o numero for 1.1 ele retorna 1, se for 1.9 ele retorna 2.
                echo "<p>'round(1.1)' retorna: " . round(1.1) . "<br></p>";
                echo "<p>'round(1.9)' retorna: " . round(1.9) . "<br></p>";
                //hypot() -> calcula a hipotenusa de um triangulo retangulo, sendo que os parametros são os catetos do triangulo.
                echo "<p>'hypot(3, 4)' retorna: " . hypot(3, 4) . "<br></p>";
                // intdiv() -> retorna a parte inteira da divisão de dois numeros, ou seja, se o resultado da divisão for 1.1 ele retorna 1, se for 1.9 ele retorna 1.
                echo "<p>'intdiv(10, 3)' retorna: " . intdiv(10, 3) . "<br></p>";
                echo "<p>'intdiv(5, 2)' retorna: " . intdiv(5, 2) . "<br></p>";
                // max() -> retorna o maior valor de uma lista de valores.
                echo "<p>'max(1, 2, 3, 4, 5)' retorna: " . max(1, 2, 3, 4, 5) . "<br></p>";
                // min() -> retorna o menor valor de uma lista de valores.
                echo "<p>'min(1, 2, 3, 4, 5)' retorna: " . min(1, 2, 3, 4, 5) . "<br></p>";
                // pi() -> retorna o valor de pi.
                echo "<p>'pi()' retorna: " . pi() . "<br></p>";
                // pow() -> retorna o valor de um numero elevado a outro numero, sendo o primeiro parametro a base e o segundo o expoente, que faz a mesma coisa que o operador **. Mas um problema de utilizar o pow() é que ele não aceita numeros decimais, ou seja, se você colocar pow(2.5, 3) ele vai retornar 8, pois ele vai ignorar o .5. E ele também não aceita numeros negativos, ou seja, se você colocar pow(-2, 3) ele vai retornar -8, pois ele vai ignorar o sinal de menos.Como tambem o pow() não aceita numeros muito grandes, ou seja, se você colocar pow(2, 100) ele vai retornar 0, pois ele não consegue calcular um numero tão grande. E por ultimo o pow() não aceita numeros muito pequenos, ou seja, se você colocar pow(2, -100) ele vai retornar 0, pois ele não consegue calcular um numero tão pequeno. 
                echo "<p>'pow(2, 3)' retorna: " . pow(2, 3) . "<br> que é a mesma coisa que o operador **</p>";
                // sqrt() -> retorna a raiz quadrada de um numero, ou seja, se você colocar sqrt(9) ele vai retornar 3, pois 3 * 3 = 9. O problema desta forma é que não é possivel fazer raiz cubica ou maiores, ou seja, se você colocar sqrt(27) ele vai retornar 5.1961524227066, pois 5.1961524227066 * 5.1961524227066 = 27. Para fazer raiz cubica ou maiores é necessario utilizar o operador **, ou seja, se você colocar 27 ** (1/3) ele vai retornar 3, pois 3 * 3 * 3 = 27.
                echo "<p>'sqrt(9)' retorna: " . sqrt(9) . "<br></p>";
                echo "<p>'sqrt(16)' retorna: " . sqrt(16) . "<br></p>";
                echo "<p>'sqrt(121)' retorna: " . sqrt(121) . "<br></p>";
                echo "<p>'sqrt(27)' retorna: " . sqrt(27) . "<br></p>";
                echo "<p>'27 ** (1/3)' -> (é um jeito de fazer raiz quadrada sem a função) retorna: " . 27 ** (1/3) . "<br></p>";
                // sin() -> retorna o seno de um angulo, sendo o angulo em radianos.
                echo "<p>'sin(90)' retorna: " . sin(90) . "<br></p>";
                // cos() -> retorna o cosseno de um angulo, sendo o angulo em radianos.
                echo "<p>'cos(90)' retorna: " . cos(90) . "<br></p>";
                // tan() -> retorna a tangente de um angulo, sendo o angulo em radianos.
                echo "<p>'tan(90)' retorna: " . tan(90) . "<br></p>";

                // E essas são as funções aritiméticas que podem ajudar na hora de fazer calculos matematicos.

                
            ?>
        </div>
        <a href="../Aula9/">Link para proxima aula.</a>
    </main>
    
</body>
</html>
