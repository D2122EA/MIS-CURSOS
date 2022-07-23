<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>

<body>
    <?php
    error_reporting(0); /* o mas especificamente 
    error_reporting(E_ERROR | E_WARNING | E_PARSE);  
    evita la visualizacion de las notificaconens cuando se ejecuta algo
    Una cosa a tener en
    cuent a es que puede quedarse por predeterminado y traernos problemas 
    posteriormente */
    $c1 = $_REQUEST['c1'];
    $c2 = $_REQUEST['c2'];
    $c3 = $_REQUEST['c3'];
    $c4 = $_REQUEST['c4'];
    $p1 = $_REQUEST['p1'];
    $p2 = $_REQUEST['p2'];
    $p3 = $_REQUEST['p3'];
    $p4 = $_REQUEST['p4'];
    ?>
    <form name="form1" method="post" action="EJERCICIO4.php">
        <table border="1" width=100% height=400>
            <tr>
                <td colspan=3 bgcolor="#aaaaaa" align="center"> FACTURACION</td>
            </tr>
            <tr bgcolor="#aaaaaa" align="center">
                <td>Cantidad </td>
                <td>Descripción </td>
                <td>Precio </td>
            </tr>
            <tr>
                <td><input type="text" name="c1" value=<?php echo $c1; ?>> </td>
                <td>Monitor </td>
                <td><input type="text" name="p1" value=<?php echo $p1; ?>> </td>
            </tr>
            <tr>
                <td><input type="text" name="c2" value=<?php echo $c2; ?>> </td>
                <td>Procesador </td>
                <td><input type="text" name="p2" value=<?php echo $p2; ?>> </td>
            </tr>
            <tr>
                <td><input type="text" name="c3" value=<?php echo $c3; ?>> </td>
                <td>Case </td>
                <td><input type="text" name="p3" value=<?php echo $p3; ?>> </td>
            </tr>
            <tr>
                <td><input type="text" name="c4" value=<?php echo $c4; ?>> </td>
                <td>Teclado </td>
                <td><input type="text" name="p4" value=<?php echo $p4; ?>> </td>
            </tr>
            <tr align="center">
                <td colspan=3> <input type="submit" action="mostrar"> </td>
            </tr>
        </table>
    </form>
    <?php
    $subtotal = $c1 * $p1 + $c2 * $p2 + $c3 * $p3 + $c4 * $p4;
    $igv = $subtotal * 0.18;
    $total = $igv + $subtotal;
    printf("-------------------------- Subtotal: S/. %.2f <br>", $subtotal);
    printf("-------------------------- IGV: S/. %.2f <br>", $igv);
    printf("-------------------------- Total: S/. %.2f <br>", $total);
    ?>
</body>

</html>