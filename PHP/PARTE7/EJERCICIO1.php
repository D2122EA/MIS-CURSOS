<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hello world</title>
</head>
<body>
<?php
printf("Formato decimal: %d, %d <br>",2,10); 
/*es igual que float solo que envia con el doble de presicion(en float la precision es
hasta 7 digitos pero en double es hasta 15 digitos)*/
printf("Formato double: %f <br>",88);
/*También le podemos especificar con cuantos decimales deseamos que se imprima el número de la 
siguiente manera %.2f */
printf("Formato double redondeado: %.2f <br>",2.5687);
printf("El número dos con diferentes formatos: %d %f %.2f",2,4,6);
?>
</body>
</html>