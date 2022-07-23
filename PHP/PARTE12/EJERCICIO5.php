<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>

<body>
    <?php
    //Función rewind()
    //La función rewind() mueve el puntero al inicio
    //del archivo. Recibe como parámetro a la variable
    //fichero que se abrió previamente.
    $fp = fopen("texto.txt", "r");
    echo "<h2>Leer el texto cada diez caracteres</h2>";
    echo fread($fp, 10);
    echo "<br>";
    rewind($fp);
    echo fread($fp, 10);
    echo "<br>";
    rewind($fp);
    echo fread($fp, 10);
    echo "<br>";
    fclose($fp);
    ?>
</body>

</html>