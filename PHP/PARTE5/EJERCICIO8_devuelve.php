<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>

<body>
    <?php
    $texto = $_REQUEST['texto'];
    for ($x = 0; $x < 10; $x++) {
        echo "$texto<br>";
    }
    ?>
</body>

</html>