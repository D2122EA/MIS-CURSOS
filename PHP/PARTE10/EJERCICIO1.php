<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>

<body>
    <?php
    function mostrar($texto)
    {
        for ($x = 0; $x < 10; $x++) {
            echo " $texto <br>";
        }
        echo "<hr>";
    }
    mostrar("Hello");
    mostrar("World");
    ?>
</body>

</html>