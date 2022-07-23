<html>

<head>
    <title>Hello world</title>
</head>

<body>
    <form action="EJERCICIO2.php" method="post">
        Ingrese un número : <input type="text" name="numero"> <br>
        <input type="submit" value="Mostrar"><br>
    </form>
    <?php
    $num = $_REQUEST['numero'];
    printf("El número en decimal es: %d <br>", $num);
    printf("El número en binario es: %b <br>", $num);
    printf("El número en octal es: %o <br>", $num);
    printf("El número en hexadecimal es: %x 
<br>", $num);
    ?>
</body>

</html>