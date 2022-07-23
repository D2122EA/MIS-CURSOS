<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    ESCRIBA SU NUMERO
    <form action="C_devuelve.php" method="post">
        <input type="texto" name="valor">
        <input type="submit" name="enviar">
    </form>
    <!--Proyecto contador-->
    <?php
    $archivo = "contadorC.txt";
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