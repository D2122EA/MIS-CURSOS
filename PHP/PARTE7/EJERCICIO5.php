<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
</head>

<body>
    <pre> <!-- nos permite ver la texto con  espaciados-->
<?php
printf("%.2s<br>", "patata"); // pa 
printf("%.4s<br>", "patata"); // pata
printf("*%9.4s<br>", "patata"); // pata Total 9 caracteres, resto espacios 
printf("*%9s<br>", "patata"); // patata. El resto hasta 9 caracteres lo rellena con espacios
printf("%-9s*<br>", "patata"); // patata. El resto hasta 9 caracteres lo rellena con espacios a la
// izquierda
printf("%09s<br>", "patata"); // patata. El resto hasta 9 caracteres lo rellena con ceros 
printf("%'x9s<br>", "patata"); // patata. El resto hasta 9 caracteres lo rellena con x (fijate en la
// comilla simple)
?>
</pre>
</body