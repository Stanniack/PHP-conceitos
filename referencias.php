<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Olá mundo</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
<div>
    <?php
        $a = 5;
        /* Referenciando a, igual ponteiro */
        $b = &$a;
        $b += 5;

        echo "Valor da variável a: $a e b: $b";

        /* Variáveis de variáveis */
        $nome = "mateus";
        $$nome = "humano";
        $$$nome = "animal";

        echo "<br>$nome é $mateus, e $mateus é um $humano" ;
    ?>
</div>
</body>

</html>
<?php
