<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    
    <title>Dados pegos</title>
</head>
<body>
    <header>
        <h1>Aqui aparecerão os dados pegos</h1>
    </header>
    <main>
        <?php 
            //$_GET é um array que pega os dados que foram passados pela url e é uma variavel Global
            //$_POST é um array que pega os dados que foram passados pelo formulario e é uma variavel Global
            //$_REQUEST é um array que pega os dados que foram passados pelo formulario e pela url e é uma variavel Global

            //O metodo post pode acabar sendo mais seguro já que o valor do campo não aparece na url

            $nome = $_POST["nome"]; // Colocando colchetes e o nome do campo, é possivel pegar o valor do campo especifico de um formulario ou do array
            $snome = $_POST["sobrenome"];
            $email = $_POST["email"];
            $desc = $_POST["desc"];
            
            echo "<p class=\"descri\"><span class=\"nom\">$nome</span> <span class=\"sobrenom\">$snome</span> tem o email: <span class=\"email\">$email</span></span> e sua descrição é: <span class=\"de\">$desc</span><p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para pagina anterior</a></p>
    </main>
</body>
</html>
