<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>

<body>
    <?php
    $fp = fopen("texto.txt", "r");
    $cadena = fpassthru($fp);
    /*
    Hacemos el llamado a la función que nos permitirá mostrar el 
    contenido en la página y lo guardamos 
    en $cadena (este paso nos permitirá luego mostrar la cantidad 
    de caracteres que posee el archivo).
    */
    //Si no queremos usar la cadena fpassthru($fp);
    fclose($fp);
    echo $cadena;
    ?>
</body>

</html>