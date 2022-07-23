<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>

<body>
    <?php
    $archivo = "contadorA.txt";
    $fp = fopen($archivo, "r");
    $contadorA = fgets($fp,26);
    fclose($fp);

    $archivo = "contadorB.txt";
    $fp = fopen($archivo, "r");
    $contadorB = fgets($fp,26);
    fclose($fp);

    $archivo = "contadorC.txt";
    $fp = fopen($archivo, "r");
    $contadorC = fgets($fp,26);
    fclose($fp);

    $archivo = "contadorD.txt";
    $fp = fopen($archivo, "r");
    $contadorD = fgets($fp,26);
    fclose($fp);
    
    ?>
    <h3>Estadísticas del sitio web</h3>
    <hr>
    Cantidad de visitas por página:<br>
    <ul>
        <li>EJERCICIOA: <?php echo $contadorA; ?> </li>
        <li>EJERCICIOB: <?php echo $contadorB; ?> </li>
        <li>EJERCICIOC: <?php echo $contadorC; ?></li>
        <li>EJERCICIOD:<?php echo $contadorD; ?></li>
    </ul>
</body>

