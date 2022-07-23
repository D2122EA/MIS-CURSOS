<html>

<head>
    <title>Hello world</title>
</head>

<body>
    <?php
    echo "Función date<br>";
    echo "<hr>";
    echo date("d-m-y") . "<br>";
    echo date("H:i:s") . "<br>";
    echo date("Y") . "<br>";
    echo date("D") . "<br>";
    echo date("M") . "<br>";
    echo date("d/m/y h:i a") . "<br>";
    echo date("d-m-y h:i", time()) . "<br>";
    ?>
</body>

</html>