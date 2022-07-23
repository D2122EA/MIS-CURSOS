<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>

<body>
    <form name="form1" method="post">
        Ingrese una cadena: <input type="text" name="cadena"><br>
        <input type="submit" action="Enviar">
    </form>
    <?php
    $cad = $_REQUEST['cadena'];
    echo "Hay " . strlen($cad) . " caracteres <br>";
    ?>
</body>

</html>