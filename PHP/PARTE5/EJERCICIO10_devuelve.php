<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>

<body>
    <?php
    $usu = $_REQUEST['usuario'];
    $pas = $_REQUEST['password'];
    if ($usu == "Hello" && $pas == "world") {
        echo "<h2>Bienvenido al sistema</h2>";
        echo "<hr>";
        echo "*******************************<br>";
        echo "*******************************<br>";
        echo "*******************************<br>";
        echo "*******************************<br>";
    } else {
        echo "Usted no tiene acceso<br>";
        echo "<a href='eje10.php'> Volver </a>";
    }
    ?>
</body>

</html