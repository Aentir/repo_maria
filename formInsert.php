<?php
include_once 'clases/Connection.php';
include_once 'clases/Insert.php';

$data = new Insert();

//Si recibe información por POST la guarda en $values y se la pasta al método
if (count($_POST)) {
    $values = $_POST;
    $data->insertData($values);
    //El header redireccionará a index.php
    header("location: index.php");
}

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
    <form action="" method="post">
    <label>DNI Alumno</label>
            <input type="text" name="alum_dni">
        <label>Nombre alumno: </label>
            <input type="text" name="alum_nombre">
        <label>Primer apellido</label>
            <input type="text" name="alum_apellido1">
        <label>Segundo apellido</label>
            <input type="text" name="alum_apellido2">-
        <input type="submit" name="envio" value="Enviar">
        <a href="index.php">Añadir nuevo registro</a>
    </form>
</body>
</html>