<?php
include_once 'clases/Connection.php';
include_once 'clases/Info.php';

$info = new Info();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label>Nombre a buscar: </label>
            <input type="text" name="alum_nombre">
            <input type="submit" name="enviando" value="Enviar">
    </form>
    <thead>
        <tr>Nombre</tr>
        <tr>Apellido</tr>
        <tr>Apellido2</tr>
        <tr>DNI</tr>
        <br>
    </thead>
    <tbody>
        <?=$info->getInfo()?>
    </tbody>
    
</body>
</html>