<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>

<body>
    <?php
    $vec = array("Arequipa", "Lima", "Cusco", "Piura", "Tacna");
    for ($x = 0; $x < count($vec); $x++) {
        echo "$vec[$x] <br>";
    }
    ?>
</body>

</html>