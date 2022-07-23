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
    $palabras = explode(",", $cad);
    for ($i = 0; $palabras[$i]; $i++)
        echo $palabras[$i], "<br>";
    ?>
</body>

</html>