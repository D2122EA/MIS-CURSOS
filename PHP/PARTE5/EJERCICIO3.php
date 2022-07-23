<html>

<head>
    <title>Hello world</title>
</head>

<body>
    <form action="EJERCICIO3_devuelve.php" method="post">
        Ingrese primer valor:
        <input type="text" name="valor1">
        <br>
        Ingrese segundo valor:
        <input type="text" name="valor2">
        <br>
        <!-- Es importante notar que cada checkbox tiene un nombre distinto(check1 y check2) -->
        <input type="checkbox" name="check1">sumar
        <br>
        <input type="checkbox" name="check2">restar
        <br>
        <input type="submit" name="operar">
    </form>
</body>

</html>