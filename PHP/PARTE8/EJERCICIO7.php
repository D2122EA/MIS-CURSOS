<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hello world</title>
</head>

<body>
    <form action="EJERCICIO7.php" method="post">
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
        $segundos = mktime(0, 0, 0, $mes, $dia, $anio);
        $diasem = date("l", $segundos);
        echo "<br>$diasem<br>";
        switch ($diasem) {
            case "Monday":
                $b = "Lunes";
                break;
            case "Tuesday":
                $b = "Martes";
                break;
            case "Wednesday":
                $b = "Miercoles";
                break;
            case "Thursday":
                $b = "Jueves";
                break;
            case "Friday":
                $b = "Viernes";
                break;
            case "Saturday":
                $b = "Sábado";
                break;
            case "Sunday":
                $b = "Domingo";
                break;
        }
        switch ($mes) {
            case 1:
                $a = "Enero";
                break;
            case 2:
                $a = "Febrero";
                break;
            case 3:
                $a = "Marzo";
                break;
            case 4:
                $a = "Abril";
                break;
            case 5:
                $a = "Mayo";
                break;
            case 6:
                $a = "Junio";
                break;
            case 7:
                $a = "Julio";
                break;
            case 8:
                $a = "Agosto";
                break;
            case 9:
                $a = "Setiembre";
                break;
            case 10:
                $a = "Octubre";
                break;
            case 11:
                $a = "Noviembre";
                break;
            case 12:
                $a = "Diciembre";
                break;
        }
        echo "<br> Hoy es $b $dia del $a del $anio <br>";
    } else {
        echo "La fecha es incorrecta";
    }
    ?>
</body>

</html>