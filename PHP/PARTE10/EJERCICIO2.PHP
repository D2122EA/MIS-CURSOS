<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>

<body>
    <?php
    function mayor($x, $y)
    {
        if ($x > $y) {
            return $x;
        } else {
            return $y;
        }
    }
    function menor($x, $y)
    {
        if ($x < $y) {
            return $x;
        } else {
            return $y;
        }
    }
    echo "El mayor es: " . mayor(12, 10) . "<br>";
    echo "El mayor es: " . mayor(8, 100) . "<br>";
    echo "El menor es: " . menor(15, 10) . "<br>";
    ?>
</body>

</html>