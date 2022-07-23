<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>

<body>
    <form name="form1" method="post">
        Cadena: <input type="text" name="cadena"><br>
        Palabra a buscar: <input type="text" name="buscar"><br>
        Palabra a reemplazar: <input type="text" name="reemplazar"><br>
        <input type="submit" action="Enviar">
    </form>
    <?php
    //EJEMPLO1
    $cadena = $_REQUEST['cadena'];
    $buscar = $_REQUEST['buscar'];
    $reemplazar = $_REQUEST['reemplazar'];
    echo "<hr>";
    echo str_replace($buscar, $reemplazar, $cadena);
    echo "<hr>";
    //EJEMPLO2
    echo str_replace("verde", "rojo", "Un pez de color verde, como verde es la hierba."), "<br>";
    ?>
</body>

</html>