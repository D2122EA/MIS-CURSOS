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
        $valor = $_REQUEST["valor"];
        for($x=0;$x<7;$x++){
            if($x=$valor){
                echo "El valor corresponde a un dia de la semana";
            }
            else{
                $x=7;
                echo "El valor no corresponde a un dia de la semana";
            }  
        }
?>
</body>
</html>