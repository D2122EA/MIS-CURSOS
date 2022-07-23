<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello world</title>
</head>

<body>
    <?php
    if ($_REQUEST['operacion'] == "suma") {
        $suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];
        echo "La suma es:" . $suma;
    } else {
        if ($_REQUEST['operacion'] == "resta") {
            $resta = $_REQUEST['valor1'] - $_REQUEST['valor2'];
            echo "La resta es:" . $resta;
        }
    }
    ?>
</body>

</html>