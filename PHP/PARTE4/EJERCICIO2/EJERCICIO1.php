<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>
<?php
//Realizar un programa que permita mostrar un listado
//de 10 texto hipolito unanue dentro de una tabla utilizando for
echo "<table border=1>";
for ($x = 0; $x < 10; $x++) {
    echo "<tr>";
    echo "<td>" . $x + 1 . "</td>";
    echo "<td>HIPOLITO</td> <td>UNANUE</td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>

</html>