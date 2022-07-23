<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>

<body>
    <form name="form1" method="post">
        Nombre: <input type="text" name="nombre"><br>
        Apellido: <input type="text" name="apellido"><br>
        <input type="submit" action="Enviar">
    </form>
    <?php
    //EJEMPLO1
    $nom = $_REQUEST['nombre'];
    $ape = $_REQUEST['apellido'];
    //EJEMPLO2
    echo substr("Hello world", 0, 9), "<br>";
    echo substr("Hello world", 5, 10), "<br>";
    echo substr("Hello world", 3, 12), "<br>";
    echo "<hr>";
    $codigo = substr($nom, 0, 3) . substr($ape, 0, 3);
    echo $codigo;
    ?>
</body>

</html>