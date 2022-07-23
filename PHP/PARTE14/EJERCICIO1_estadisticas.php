<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>

<body>
    <?php
    $archivo = "contadores/index.txt";
    $fp = fopen($archivo, "r");
    $contadorindex = fgets($fp,26);
    fclose($fp);

    $archivo = "contadores/tecnico.txt";
    $fp = fopen($archivo, "r");
    $contadortecnico = fgets($fp,26);
    fclose($fp);

    $archivo = "contadores/grafico.txt";
    $fp = fopen($archivo, "r");
    $contadorgrafico = fgets($fp,26);
    fclose($fp);

    $archivo = "contadores/multimedia.txt";
    $fp = fopen($archivo, "r");
    $contadormultimedia = fgets($fp,26);
    fclose($fp);

    $archivo = "contadores/web.txt";
    $fp = fopen($archivo, "r");
    $contadorweb = fgets($fp,26);
    fclose($fp);
    
    ?>
    <h3>Estadísticas del sitio web</h3>
    <hr>
    Cantidad de visitas por página:<br>
    <ul>
        <li>Principal: <?php echo $contadorindex; ?> </li>
        <li>Técnico en Computación: <?php echo $contadortecnico; ?> </li>
        <li>Diseñador gráfico: <?php echo $contadorgrafico; ?></li>
        <li>Diseñador multimedia:<?php echo $contadormultimedia; ?></li>
        <li>Páginas web:<?php echo $contadorweb; ?></li>
    </ul>
</body>

</html>