<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>

<body>
    <h3>Bienvenidos al Hello uremy</h3>
    <hr>
    <ul>
        <li><a href="EJERCICIO1_tecnico.php">Técnico en Computación</a></li>
        <li><a href="EJERCICIO1_grafico.php">Diseñador gráfico</a></li>
        <li><a href="EJERCICIO1_multimedia.php">Diseñador multimedia</a></li>
        <li><a href="EJERCICIO1_web.php">Páginas web</a></li>
        <li><a href="EJERCICIO1_estadisticas.php">Estadisticas del sitio</a></li>
    </ul>
    <?php
    $archivo = "contadores/index.txt";
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