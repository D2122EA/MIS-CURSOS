<html>

<head>
    <title>Hello world</title>
</head>

<body>
    <form action="EJERCICIO2_devuelve.php" method="post">
        <!--El name de valor 1 y valor 2 debe ser diferentes-->
        Ingrese primer valor:
        <input type="text" name="valor1">
        <br>
        Ingrese segundo valor:
        <input type="text" name="valor2">
        <br>
        <!--El name de suma y resta debe ser iguales
        Esto es necesario para que el navegador sepa que los dos 
        controles están relacionados (recordar que cuando uno selecciona un 
        radio se debe deseleccionar el otro)
        -->
        <input type="radio" name="radio1" value="suma">sumar
        <br>
        <input type="radio" name="radio1" value="resta">restar
        <br>
        <input type="submit" name="operar">
    </form>
</body>

</html>