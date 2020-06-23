<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

<div>

    <?php
        // isset() -> verifica se o valor foi passado
        $nome = isset($_GET['nome']) ? $_GET['nome'] : "Não informado";
        $idade = isset($_GET['idade']) ? $_GET['idade'] : "Não informado";
        $genero = isset($_GET['genero']) ? $_GET['genero'] : "Não informado";

        echo "$nome tem $idade anos e é $genero";
    ?>

    <a href="dados2.html"><button>Voltar</button></a>

</div>

</body>

</html>