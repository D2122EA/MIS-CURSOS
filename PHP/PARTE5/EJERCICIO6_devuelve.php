<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>

<body>
    <?php
    $num1 = $_REQUEST['numero1'];
    $num2 = $_REQUEST['numero2'];
    $num3 = $_REQUEST['numero3'];
    $suma = $num1 + $num2 + $num3;
    echo "La suma de $num1 + $num2 + $num3 es: $suma <br>";
    ?>
</body>

</html>