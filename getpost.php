<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Olá mundo</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
<div>
    <?php

    # pegando dados por url (post)
    $a = $_GET['a'];
    $b = $_GET['b'];

    # exemplo de get post: getpost.php?&a=1&b=2

    echo "A soma é: ".($a + $b);

    ?>
</div>
</body>

</html>
