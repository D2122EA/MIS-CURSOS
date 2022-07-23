<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $vec[] = "Arequipa";
    $vec[] = "Lima";
    $vec[] = "Cusco";
    $vec[] = "Piura";
    $vec[] = "tacna";
    $vec[] = "Iquitos";
    $vec[] = "Chiclayo";
    $vec[] = "Puno";
    $vec[] = "Tumbes";
    for ($x = 0; $x < count($vec); $x++) {
        echo "$vec[$x] <br>";
    }
    ?>
</body>

</html>