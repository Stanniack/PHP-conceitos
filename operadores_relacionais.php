<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Olá mundo</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
<div>
    <?php
        $a = 1;
        $b = 2;

        $maior = $a > $b ? $a : $b;

        $v1 = $_GET['a'];
        $v1 = $_GET['b'];
        $opcao = $_GET['op'];

        $r = ($_GET['op'] == "s") ? ($_GET['a'] + $_GET['b']) : ($_GET['a'] * $_GET['b']);

        echo "resultado: $r";

        /* Variáveis iguais (==) e idênticas (iguais e do mesmo tipo primitivo, ===) */
        $c = 3;
        $d = "3";

        echo "<br>" . ($c === $d ? "Sim" : "Não");


    ?>
</div>
</body>

</html>
<?php
