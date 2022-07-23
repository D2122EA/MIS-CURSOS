<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>

<body>
    <h3>Técnico en Computación</h3>
    <hr>
    <p>Carrera 100% práctica Carrera 100% práctica Carrera 100% práctica Carrera 100% práctica
        Carrera 100% práctica Carrera 100% práctica Carrera 100% práctica Carrera 100% práctica Carrera
        100% práctica Carrera 100% práctica Carrera 100% práctica Carrera 100% práctica Carrera 100%
        práctica
        Carrera 100% práctica Carrera 100% práctica </p>
    <br>
    <br>
    <a href="EJERCICIO1_index.php">Volver</a>
    <?php
    $archivo = "contadores/tecnico.txt";
    $contador = 0;
    $fp = fopen($archivo, "r");
    $contador = fgets($fp, 26);
    fclose($fp);
    $contador++;
    $fp = fopen($archivo, "w");
    fwrite($fp, $contador, 26);
    fclose($fp);
    ?>
</body>

</html>