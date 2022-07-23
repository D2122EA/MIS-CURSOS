<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="D_devuelve.php"method="post">
    INDIQUE EL VALOR INICIAL<input type="texto"name="ini"><br>
    INDIQUE EL VALOR FINAL<input type="texto"name="fin"><br>
    <input type="submit" name="enviar"><br>
    </form>
        <!--Proyecto contador-->
        <?php
    $archivo = "contadorD.txt";
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