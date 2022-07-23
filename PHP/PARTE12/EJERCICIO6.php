<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>

<body>
    <?php
    //Función fseek()
    //La función fseek() permite situar el puntero en un
    //lugar específico. Tiene dos parámetros, el primero es
    //la variable fichero, y el segundo es el número de carácter
    //donde se quiere posicionar. (Tener presente de que el primer
    //carácter es el número 0).
    $nombre = "texto.txt";
    $f = @fopen($nombre, "r") or die("Error al abrir el archivo: $nombre");
    fseek($f, 2);
    echo fread($f, 18);
    echo "<Br>";
    echo "Posición actual:" . ftell($f);
    fclose($f);
    ?>
</body>

</html>