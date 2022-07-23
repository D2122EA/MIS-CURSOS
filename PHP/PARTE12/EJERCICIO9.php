<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>

<body>
    <?php
    //Función file_exists()
    //La función file_exists() permite determinar la
    //existencia o no del archivo pasado como parámetro.
    //Devuelve verdadero en caso de existir el archivo,
    //en caso contrario devuelve falso. Generalmente se
    //utiliza esta función cuando se pretende borrar el
    //archivo, renombrarlo o simplemente abrirlo.
    //Ejemplo
    //Verificar si el archivo texto.txt existe o no.
    $nombre = "texto.txt";
    if (file_exists($nombre)) {
        echo "El $nombre existe";
    } else {
        echo "El $nombre no existe";
    }
    ?>
</body>

</html>