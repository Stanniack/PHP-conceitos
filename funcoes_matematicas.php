<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Olá mundo</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
<div>
    <?php
    echo "<br>Exponenciação: ".(pow(3, 3));
    echo "<br>Módulo: ".(abs(-10));
    echo "<br>SQRT: ".(sqrt(9));
    echo "<br>Arrendondamento: ".(round(3.4));
    echo "<br>Arrendondamento sempre pra cima: ".(ceil(3.4));
    echo "<br>Arrendondamento sempre pra baixo: ".(floor(3.4));
    echo "<br>Valor inteiro da var: ".(intval(10.98));
    echo "<br>Formatação de número: ".(number_format(10, 2));
    ?>
</div>
</body>

</html>
<?php
