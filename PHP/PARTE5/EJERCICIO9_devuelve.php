<html>

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>

<body>
    <?php
    $num = $_REQUEST['numero'];
    echo "<table border=1 width=100%>";
    echo "<tr>";
    echo "<td>";
    echo "Tabla de multiplicar";
    echo "<hr>";
    for ($x = 0; $x <= 12; $x++) {
        $res = $x * $num;
        echo "$x por $num es $res <br>";
    }
    echo "</td>";
    echo "<td>";
    echo "<br><br>Tabla de la suma";
    echo "<hr>";
    for ($x = 0; $x <= 12; $x++) {
        $res = $x + $num;
        echo "$x más $num es $res <br>";
    }
    echo "</td>";
    echo "</tr>";
    echo "</table>";
    ?>
</body>