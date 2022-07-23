<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>

<body>
    <?php
    $archivo = "contador.txt";
    $contador = 0;
		//Abrimos la modalidad lectura
    $fp = fopen($archivo, "r");
    $contador = fgets($fp, 26);
    fclose($fp);
    $contador++;
		//Abrimos la modalidad escritura
    $fp = fopen($archivo, "w");
    fwrite($fp, $contador, 26);
    fclose($fp);
    echo "Esta página ha sido visitada $contador veces";
    ?>
</body>

</html>