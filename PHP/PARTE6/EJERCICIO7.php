<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>

<body>
    <?php
    $vec = array(
        'dni' => "41015588", 'nombre' => "Juan Carlos",
        'direccion' => "Casa 01", 'fecnac' => "12/08/2013"
    );
    echo $vec['dni'];
    echo $vec['nombre'];
    echo $vec['direccion'];
    echo $vec['fecnac'];
    ?>
</body>

</html>