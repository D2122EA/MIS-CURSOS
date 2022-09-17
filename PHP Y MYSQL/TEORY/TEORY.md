# PROYECTO1: SUBIR ARCHIVOS AL SERVIDOR
1. Creando formulario
```html
<html>
<head>
<meta charset="utf-8">
<title>Mi primera pagina</title>
</head>
<body>
<form action="subearchivo.php" method="post" 
enctype="multipart/form-data">
<!--El modo de encriptacion es importante(enctype)porque nos permite subir los archivos -->
<b>Campo de tipo texto:</b>
<br>
<input type="text" name="cadenatexto" size="20" maxlength="100">
<input type="hidden" name="MAX_FILE_SIZE" value="100000">
<br>
<br>
<b>Enviar un nuevo archivo: </b>
<br>
<!--El tipo input userfile nos permitira usar el boton para subir el archivo-->
<input name="userfile" type="file">
<br>
<input type="submit" value="Enviar">
</form>
</body>
</html>

```
2. Creando el archivo donde se procesara el formulario
```php
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Mi primera pagina web</title>
</head>
<body>
<?php
//tomo el valor de un elemento de tipo texto del formulario
$cadenatexto = $_POST["cadenatexto"];
echo "Escribió en el campo de texto: " . $cadenatexto . "<br><br>";
//datos del arhivo
$nombre_archivo = $_FILES['userfile']['name'];
$tipo_archivo = $_FILES['userfile']['type'];
$tamano_archivo = $_FILES['userfile']['size'];
//compruebo si las características del archivo son las que deseo
if ((strpos($tipo_archivo, "gif") || strpos($tipo_archivo, "jpeg")) && ($tamano_archivo < 100000)) { 
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $nombre_archivo)){
echo "El archivo ha sido cargado correctamente.";
}else{
echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
}
}else{
echo "La extensión o el tamaño de los archivos no es correcta."; 
echo "<br>Se permiten archivos .gif o .jpg.";
echo "<br>Se permiten archivos de 100 Kb máximo.";
}
?>
</body>


```
- Para buscar el nombre, el tamano, y el tipo escribimos ``$_FILES['userfile(lo que escribimos en el name del input tipo file)']['valor_que_queremos_buscar']``
>OJO: $_FILES esta obsoleto
https://www.php.net/manual/es/reserved.variables.files.php

>MORE UPLOADED FILE https://www.php.net/manual/es/function.move-uploaded-file.php