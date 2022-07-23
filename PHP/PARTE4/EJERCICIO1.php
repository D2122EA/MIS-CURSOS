<html>

<head>
    <title>Hello world</title>
</head>

<body>
    <?php
    $valor = rand(1, 100);
    $inicio = 1;
    while ($inicio <= $valor) {
        echo $inicio;
        echo "<br>";
        $inicio++;
    }
    ?>
</body>
</html>