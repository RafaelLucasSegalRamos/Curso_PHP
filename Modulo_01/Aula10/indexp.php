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
            setcookie("Nome:", "Rafael", time() + 3600);
            session_start(); // para iniciar a sessão
            echo '<p>
            Este é o $_GET, ele é um array associativo que recebe os valores passados pela URL. <br><br>';
            var_dump($_GET); // esta é a super global $_GET, ela é um array associativo que recebe os valores passados pela URL.
            echo '</p>';
            
            echo "<p> 
            Este é o \$_POST, ele é um array associativo que recebe os valores passados pelo formulário. <br><br>";
            var_dump($_POST); // esta é a super global $_POST, ela é um array associativo que recebe os valores passados pelo formulário. Ele pode parecer mais seguro que o $_GET, mas não é, pois ele pode ser encontrado se procurar no inspecionar, o que faz com que ele não seja criptografado aou muito seguro.
            echo "</p>";
            echo "<p>
            Este é o \$_REQUEST, ele é um array associativo que recebe os valores passados pela URL e pelo formulário, ou seja é a junção entre o \$_GET e o \$_POST. <br><br>";
            var_dump($_REQUEST); // esta é a super global $_REQUEST, ela é um array associativo que recebe os valores passados pela URL e pelo formulário, ou seja é a junção entre o $_GET e o $_POST.
            echo "</p>";

            echo "<p>
            Este é o \$_FILES, ele é um array associativo que recebe os valores passados pelo formulário, mas apenas os arquivos. <br><br>";
            var_dump($_FILES); // esta é a super global $_FILES, ela é um array associativo que recebe os valores passados pelo formulário, mas apenas os arquivos.
            echo "</p>";
            echo "<p>
            Este é o \$_COOKIE, ele é um array associativo que recebe os valores definidos nos cookies. <br><br>";
            //Descobrindo como trabalhar com cookies em PHP
            
            //setcookie("Nome:", "Rafael", time() - 3600) // para apagar o cookie
            // O setcookie funciona assim: setcookie("Nome do cookie", "Valor do cookie", tempo de vida do cookie[que geralmente utiliza a função time() + o tempo em segundos que o cookie vai durar)])
            var_dump($_COOKIE); // esta é a super global $_COOKIE, ela é um array associativo que recebe os valores passados pelo cookie.
            echo "</p>";
            echo "<p>
            Este é o \$_SESSION, ele é um array associativo que recebe os valores passados pela sessão. <br><br>";
            //Descobrindo como trabalhar com sessões em PHP
            
            $_SESSION["Nome"] = "Rafael"; // para criar uma sessão
            var_dump($_SESSION); // esta é a super global $_SESSION, ela é um array associativo que recebe os valores passados pela sessão.
            echo "</p>";
            echo "<p>
            Este é o \$_ENV, ele é um array associativo que recebe os valores passados pelo ambiente. Mas como o servidor local é apenas para fins de testes a superglobal \$_ENV não irá ter nenhum valor.<br><br>";
            var_dump($_ENV); // esta é a super global $_ENV, ela é um array associativo que recebe os valores passados pelo ambiente.
            echo "</p>";
            echo "<p><pre>
            Este é o \$_SERVER, ele é um array associativo que recebe os valores passados pelo servidor. <br><br>";
            var_dump($_SERVER); // esta é a super global $_SERVER, ela é um array associativo que recebe os valores passados pelo servidor.
            echo "</pre></p>";
            echo "<p><pre>
            Este é o \$GLOBALS, ele é um array associativo que recebe os valores passados por todas as super globais. <br><br>";
            var_dump($GLOBALS); // esta é a super global $GLOBALS, ela é um array associativo que recebe os valores passados por todas as super globais.
            echo "</pre></p>";



            ?>
        </div>
        
        <p><a href="javascript:history.go(-1)">Voltar para pagina anterior</a></p>
    </main>

</body>

</html>