<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>

<body>
    <?php
    /*
     - Getdate() nos devuelve toda la información relacionada a la fecha y 
     hora de nuestro servidor
     - Almacenamos getdate() en la variable $datos convirtiéndose en un vector.
     - Recorremos el vector $datos con la instrucción foreach dándole los valores y la 
     estructura que ya conocemos. Posteriormente imprimimos los valores que obtuvimos llamando a las variables
     $clave y $valor.
     - Extraemos palabras clave del vector como  “mday”, ”mon” o “year” 
     para mostrar un mensaje 
    */
    $datos = getdate();
    foreach ($datos as $clave => $valor) {
        echo $clave . ": " . $valor . "<br>";
    }
    echo "<hr>";
    echo "Hoy es: " . $datos['mday'] . " de " . $datos['mon'] .
        " del " . $datos['year'];
    ?>
</body>

</html>