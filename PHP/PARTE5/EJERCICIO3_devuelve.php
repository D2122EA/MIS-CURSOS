<html>

<body>
    <?php
    /* con isset comprobamos si un checkbox esta seleccionado(no hay value). Esto 
        devolvera true o false(si es true es que esta seleccionado)  
    */
    if (isset($_REQUEST['check1'])) {
        $suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];
        echo "La suma es:" . $suma . "<br>";
    }
    if (isset($_REQUEST['check2'])) {
        $resta = $_REQUEST['valor1'] - $_REQUEST['valor2'];
        echo "La resta es:" . $resta;
    }
    ?>
</body>

</html>