<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Función file()
    //Esta función permite almacenar un texto en un vector.
    //El almacenamiento se producirá línea por línea, es decir
    //que cada elemento del vector contendrá una línea de texto.
    //Ejemplo:
    //Guardar en un archivo, un determinado texto y posteriormente
    //almacenarlo línea por línea en un vector.
    // Almacenamiento del Texto
    $cadena = "PHP es un lenguaje de programación de uso
general que se adapta especialmente al 
desarrollo web. Fue creado inicialmente 
por el programador danés-canadiense Rasmus 
Lerdorf en 1994. En la actualidad, la 
implementación de referencia de PHP es 
producida por The PHP Group. PHP 
originalmente significaba Personal 
Home Page (Página personal), pero ahora 
significa el inicialismo recursivo 
PHP: Hypertext Preprocessor.";
    $f = fopen("texto1.txt", 'w');
    fwrite($f, $cadena);
    fclose($f);
    // Generación del vector
    $nombre = "texto1.txt";
    $vector = file($nombre);
    $cantidad = count($vector);
    echo "<H3>";
    echo "Vector Generado:" . "<Br>";
    foreach ($vector as $clave => $valor) {
        echo $clave . " - " . $valor . "<br>";
    }
    ?>
</body>

</html>