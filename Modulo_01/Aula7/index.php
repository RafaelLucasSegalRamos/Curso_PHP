<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style2.css">
    
    <title>Ordem de precedencia de operadores aritiméticos</title>
</head>
<body>
    <main>
        <?php 
        // A ordem dos operadores aritiméticos é a mesma da matemática, sendo:
        // 1º Parenteses ( () )
        // 2º Potenciação e Radiciação ( ** , sqrt())
        // 3º Multiplicação e Divisão e Módulo ( *, /,  % )
        // 4º Adição e Subtração ( +, - )
        
        // Exemplo:
        $res = 50/2+3**2;
        echo "<p>O resultado é: $res</p>";
        ?>
        <a href="../Aula8/">Link para proxima aula.</a>
    </main>
    
</body>
</html>
