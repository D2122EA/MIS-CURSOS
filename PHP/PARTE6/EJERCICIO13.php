<html>

<head>
</head>

<body>
    <?php
    $sueldos[] = array(1200, 2500);
    $sueldos[] = array(2200, 3500, 5800, 1000, 2500);
    $sueldos[] = array(4200, 7500, 1000, 2000, 3000, 4000, 1000);
    $sueldos[] = array(1200);
    $sueldos[] = array(1200, 2500, 5800);
    foreach ($sueldos as $clave => $valor) {
        echo "La clave es:" . $clave . "<br>";
        echo "Los sueldos del área son:<br>";
        foreach ($valor as $key => $val) {
            echo $val . "<br>";
        }
        echo "<hr>";
    }
    ?>
</body>

</html>