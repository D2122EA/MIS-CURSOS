<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>

<body>
    <form action="EJERCICIO3.php" method="post">
        Ingrese un número menor:
        <input type="text" name="menor"> <br>
        Ingrese un número mayor:
        <input type="text" name="mayor"> <br>
        <input type="submit" value="Mostrar"><br>
    </form>
    <?php
        $menor = $_REQUEST['menor'];
        $mayor = $_REQUEST['mayor'];
        for ($x = $menor; $x <= $mayor; $x++) {
            printf("El número %d en ascci es: %c <br>", $x, $x);
        }
    ?>
</body>

</html>