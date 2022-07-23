<html>

<head>
    <title>Hello world</title>
</head>

<body>
    <form name="form1" method="post">
        Cadena: <input type="text" name="cadena"><br>
        <input type="submit" action="Enviar">
    </form>
    <?php
    $cadena = $_REQUEST['cadena'];
    echo "<hr>";
    echo strtolower($cadena) . "<br>";
    echo strtoupper($cadena) . "<br>";
    echo strtoupper("hello world") . "<br>";
    ?>
</body>