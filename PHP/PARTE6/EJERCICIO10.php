<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello world</title>
</head>

<body>
    <?php
    $visitas["lunes"] = 200;
    $visitas["martes"] = 186;
    $visitas["miercoles"] = 136;
    $visitas["jueves"] = 222;
    $visitas["viernes"] = 1000;
    $visitas["sabado"] = 2000;
    $visitas["feriado"] = 12000;
    foreach ($visitas as $key => $value) {
        echo "Clave: $key <br>";
        echo "Valor: $value <br>";
        echo "<hr>";
    }
    ?>
</body>

</html>