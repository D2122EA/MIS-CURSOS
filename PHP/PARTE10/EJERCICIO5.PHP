<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>

<body>
    <?php
    //Funciones con valores por defecto
    function suma($a = 0, $b = 0, $c = 0)
    {
        $s = $a + $b + $c;
        echo "La suma es: $s <br>";
    }
    suma();
    ?>
</body>

</html>