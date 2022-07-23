<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>

<body>
    <?php
    $calendario[] = array(1, "enero", 31);
    $calendario[] = array(2, "febrero", 28);
    $calendario[] = array(3, "marzo", 31);
    $calendario[] = array(4, "abril", 30);
    $calendario[] = array(5, "mayo", 31);
    $calendario[] = array(6, "junio", 30);
    $calendario[] = array(7, "julio", 31);
    $calendario[] = array(8, "Agosto", 31);
    foreach ($calendario as $clave => $valor) {
        echo $clave;
        echo "<br>";
        echo "Id: " . $valor[0] . "<br>";
        echo "Mes: " . $valor[1] . "<br>";
        echo "Días: " . $valor[2] . "<br>";
        echo "<hr>";
    }
    ?>
</body>

</html>