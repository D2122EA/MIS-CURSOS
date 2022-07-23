<html>

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>

<body>
    <?php
    //Tenemos la modalidad de lectura y de escritura
    $maestro = fopen("contador.txt", "r+");
    $leer = fgets($maestro, 10);
    $leer++;
    //Rewind nos permite cambiar a la modalidad de escritura
    rewind($maestro);
    //Es un alias de fwrite
    fputs($maestro, $leer);
    fclose($maestro);
    echo "Es el visitante N°: $leer";
    ?>
</body>

</html>