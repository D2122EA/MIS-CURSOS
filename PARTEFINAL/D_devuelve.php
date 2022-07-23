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
        $par=0;
        $impar=0;
        $suma = 0;
        $valor_ini = $_REQUEST["ini"];
        $valor_fin = $_REQUEST["fin"];
        for($x=0;$x<$valor_fin;$x++){
            $comprobar = $valor_ini+$x;
            $suma = $comprobar + $suma;
            if($comprobar%2==0){
                $imprimir_impar[$par]=$comprobar;
                $par++;
                
            }
            else{
                $imprimir_par[$impar]=$comprobar;
                $impar++;
            }
        }
        echo "NUMEROS PARES<br>";
        foreach($imprimir_par as $key => $value){
            echo "$value<br>";
        }
        echo "NUMEROS IMPARES<br>";
        foreach($imprimir_impar as $key => $value){
            echo "$value<br>";
        }
        echo "LA SUMA DE LOS NUMERO ES<br>";
        echo "$suma";


?>
</body>
</html>