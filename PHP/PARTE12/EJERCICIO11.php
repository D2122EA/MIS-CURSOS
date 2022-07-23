<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>

<body>
    <?php
    //Función unlink()
    //Esta función se utiliza para borrar un archivo.
    //Recibe como parámetro el nombre del archivo a borrar.
    //Ejemplo.
    //Borrar el archivo texto4.txt.
    $nombre = "texto4.txt";
    if (file_exists($nombre)) {
        unlink($nombre);
        echo "El archivo $nombre se borró correctamente";
    } else {
        echo "No se encontró el archivo $nombre";
    }
    ?>
</body>

</html>