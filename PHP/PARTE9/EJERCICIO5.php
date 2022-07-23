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
        <input type="submit" action="Enviar">
    </form>
    <?php
    $cadena = $_REQUEST['cadena'];
    $buscar = $_REQUEST['buscar'];
    echo strpos($cadena, $buscar), "<br><br>";
    ?>
</body>

</html>