<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>

<body>
    <?php
    $cadena = "Computación";
    $fp = fopen("texto.txt", "w");
    fwrite($fp, $cadena);
    fclose($fp);
    ?>
</body>

</html>