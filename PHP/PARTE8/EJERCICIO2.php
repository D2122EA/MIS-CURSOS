<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>

<body>
    <?php
    /*
    Podemos resolver esto por 2 formas: La primera es mediante getdate() y la segunda 
    es con time()
    */

    //$datos=getdate();
    //$seg=$datos['0'];
    $seg = time();
    $min = $seg / 60;
    $horas = $min / 60;
    $dias = $horas / 24;
    $meses = $dias / 30;
    $anios = $meses / 12;
    echo "Segundos: " . $seg . "<br>";
    echo "Minutos: " . $min . "<br>";
    echo "Días: " . $horas . "<br>";
    echo "Horas: " . $dias . "<br>";
    echo "Meses: " . $meses . "<br>";
    echo "Años: " . $anios . "<br>";
    ?>
</body>

</html>