<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>

<body>
    <?php
    $fp = fopen("texto.txt", "r");
    echo "<h2>Leer el texto cada diez caracteres</h2>";
    echo fread($fp, 10);
    echo "<br>";
    //despues del caracter 10
    echo fread($fp, 10);
    echo "<br>";
    //despues del caracter 20
    echo fread($fp, 10);
    echo "<br>";
    fclose($fp);
    ?>
</body>

</html>