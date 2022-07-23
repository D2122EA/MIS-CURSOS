<html>

<head>
    <title>Hello world</title>
</head>

<body>
    <?php
    $num1 = $_REQUEST['numero1'];
    $num2 = $_REQUEST['numero2'];
    $num3 = $_REQUEST['numero3'];
    if ($num1 == $num2 && $num2 == $num3) {
        echo "Los números son iguales";
    } else {
        echo "Los números no son iguales";
    }
    ?>
</body>

</html>