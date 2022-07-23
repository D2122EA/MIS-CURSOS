<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    ESCRIBA SU NUMERO<br>
    <form action="B_devuelve.php" method="post">
        HORAS TRABAJADAS:<input type="texto" name="horas"><br>
        PAGO POR HORA:<input type="texto" name="pago"><br>
        <input type="submit" name="enviar">
    </form>
    <!--Proyecto contador-->
    <?php
    $archivo = "contadorB.txt";
    //Definiendo la variable
    $contador = 0;
    //Abrimos la modalidad lectura
    $fp = fopen($archivo, "r");
    //Asignando a la variable el valor del archivo
    $contador = fgets($fp, 26);
    fclose($fp);
    //Incrementando el valor del archivo 1
    $contador++;
    //Abrimos la modalidad escritura
    $fp = fopen($archivo, "w");
    fwrite($fp, $contador, 26);
    fclose($fp);
    ?>
</body>

</html>