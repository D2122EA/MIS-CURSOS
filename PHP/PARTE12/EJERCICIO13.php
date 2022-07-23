<html>

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>

<body>
    <?php
    //Función filesize()
    //Esta función devuelve el tamaño del archivo que se le
    //pasa como parámetro. El valor devuelto es en cantidad
    //de caracteres.
    //Ejemplo
    //Determinar la cantidad de caracteres que contiene el
    //archivo llamado texto.txt.
    $nombre = "texto.txt";
    echo "<H3>";
    if (file_exists($nombre)) {
        echo "Tamaño de $nombre: ";
        echo filesize($nombre);
    } else {
        echo "No se encontro el archivo $nombre";
    }
    ?>
</body>

</html>