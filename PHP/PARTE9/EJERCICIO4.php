<html>

<head>
    <title>Hello world</title>
</head>

<body>
    <?php
    if (chop("Cadena \n\n\n\n\n ") == "Cadena") {
        echo "Iguales<br><br>";
    }
    if (chop("Cadena ") == "Cadena") {
        echo "Iguales<br><br>";
    }
    ?>
</body>

</html>