<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>

<body>
    <?php
    function TablaProducto($num)
    {
        echo "<hr>Tabla de multiplicar del $num <br><br> ";
        for ($x = 0; $x <= 12; $x++) {
            $res = $x * $num;
            echo "$x por $num es igual: $res <br>";
        }
    }
    function TablaSuma($num)
    {
        echo "<hr>Tabla de la suma del $num <br><br> ";
        for ($x = 0; $x <= 12; $x++) {
            $res = $x + $num;
            echo "$x más $num es igual: $res <br>";
        }
    }
    TablaProducto(4);
    TablaProducto(8);
    TablaSuma(14);
    TablaSuma(9);
    ?>
</body>

</html>