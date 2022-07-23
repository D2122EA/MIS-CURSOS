<html>

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>

<body>
    <form action="EJERCICIO6.php" method="post">
        Día: <input type="text" name="dia"><br>
        Mes: <input type="text" name="mes"><br>
        Año: <input type="text" name="anio"><br>
        <input type="submit" action="validar">
    </form>
    <?php
    $dia = $_REQUEST['dia'];
    $mes = $_REQUEST['mes'];
    $anio = $_REQUEST['anio'];
    if (checkdate($mes, $dia, $anio)) {
        echo "La fecha es correcta";
    } else {
        echo "La fecha es incorrecta";
    }
    ?>
</body>

</html>