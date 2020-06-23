<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="estilo.css">
    <?php
        $tamanho = isset($_GET['tamanho']);
        $cor = isset($_GET['cor']) ?? "#10000";
    ?>

    <style>
        span.texxto {
            font-size: <?php echo $tamanho; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>

<body>

<div>
    <?php
        $texto = $_GET['texto'];
        echo "<span class='texxto'>$texto</span>";
    ?>
</div>

</body>

</html>