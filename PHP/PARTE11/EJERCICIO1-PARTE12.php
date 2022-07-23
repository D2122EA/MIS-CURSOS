<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>

<body>
    <form name="form1" method="post">
        Número 1: <input type="text" name="num1"><br>
        Número 2: <input type="text" name="num2"><br>
        <input type="submit" action="Operar">
    </form>
    <?php
    include 'EJERCICIO1-devuelve.php';
    $num1 = $_REQUEST['num1'];
    $num2 = $_REQUEST['num2'];
    echo "La suma es:" . suma($num1, $num2) . "<br>";
    echo "El promedio es:" . promedio($num1, $num2) . "<br>";
    echo "El mayor es:" . mayor($num1, $num2) . "<br>";
    ?>
</body>

</html>