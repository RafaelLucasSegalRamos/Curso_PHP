<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis e Constantes</title>
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
    <h1>Mostrando o nome utilizando variaveis ou constantes</h1>

    <?php
        $sobrenome = "Guanabara";
        $nome = "Gustavo";  // Apenas as variaveis podem ser alteradas, e são definidas por terem um cifrão na frente
        $idade = 43;
        $peso = 118.5;
        $casado = false;
        $nomeCompleto = $nome .''. $sobrenome; // O CamelCase é feito assim para diferenciar as palavras, e não é obrigatorio, mas é uma boa pratica e se faz colocando a primeira letra de cada palavra em maisculo, sem espaços sendo a primeira palavra minuscula
        $snake_case_exemplo = 'SnakeCase'; // O SnakeCase é feito assim para diferenciar as palavras, e não é obrigatorio, mas é uma boa pratica e se faz colocando um underline entre as palavras, sendo todas minusculas
        const NOMECRIADOR = "Rafael Lucas";    // Para definir uma constante, utiliza-se a palavra reservada const na frente do nome da constante e colocamos o nome desta variavel em maisculo para diferenciar das variaveis
        // NOMECRIADOR = "Gustavo Guanabara"; Não é possivel alterar o valor de uma constante

        echo "<h2>Olá, meu nome é $nome $sobrenome!</h2>";
        echo "<h2>O nome do dono deste repositório é ". NOMECRIADOR ."!</h2>";
        
    ?>
    <!-- Tembem pode funcionar <? ?>, mas alguns servidores não aceitarão este shortcut-->
    <br>
    <a href="../Aula4/">Link para proxima aula.</a>
</body>

</html>