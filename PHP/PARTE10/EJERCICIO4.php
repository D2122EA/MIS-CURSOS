<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>

<body>
    <?php
    function PorValor($a)
    {
        $a = $a + 1;
    }
    function PorReferencia(&$a)
    {
        $a = $a + 3;
    }
    $p = 10;
    PorValor($p);
    echo "Por valor: <br>";
    echo $p . "<br>";
    echo "<hr>";
    $p = 10;
    PorReferencia($p);
    echo "Por referencia: <br>";
    echo $p . "<br>";
    ?>
</body>

</html>