<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>

<body>
    <?php
    //Función rename()
    //Permite cambiar el nombre a un archivo. Acepta dos
    //parámetros, el primero es el nombre actual del archivo
    //y el segundo es el nombre nuevo que se le quiere dar.
    //Ejemplo.
    //Cambiar el nombre del archivo texto5.txt por texto3.txt.
    $nombreActual = "texto5.txt";
    $nombreNuevo = "texto3.txt";
    if (file_exists($nombreActual)) {
        rename($nombreActual, $nombreNuevo);
        echo "El nombre se cambió correctamente";
    } else {
        echo "No se encontro el archivo $nombreActual";
    }
    ?>
</body>

</html>