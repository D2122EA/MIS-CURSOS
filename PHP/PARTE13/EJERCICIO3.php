<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>

<body>
    <?php
    $destino = "contador1.dat";
    $abrir = fopen($destino, "r");
    $cuenta = trim(fread($abrir, filesize($destino)));
    if ($cuenta != "")
        $cuenta++;
    else
        $cuenta = 1;
    fclose($abrir);
    $abrir = fopen($destino, "w");
    fputs($abrir, $cuenta);
    for ($i = 0; $i < strlen($cuenta); $i++) {
        $imagen = substr($cuenta, $i, 1);
        /*Recordemos que su contenido en un principio es 1, le enviamos la imagen que se mostrará esto lo hacemos con 
        src='$imagen.gif', la primera vez tendrá el valor de 1 luego se ira incrementando conforme se vaya actualizando 
        la página.*/
        $contador .= "<img alt='$imagen ' src='$imagen.jpg' width=500px height=600px>";
    }
    fclose($abrir);
    print $contador;
    ?>
</body>

</html>