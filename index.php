<?php
include_once 'clases/Connection.php';
include_once 'clases/Select.php';

$info = new Select();

// Creo que el isset es lo que te faltaba para que no diera error.
$search = isset($_GET["alum_nombre"]) ? $_GET["alum_nombre"] : "";

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
  <table border="1">
      <tr>
          <th>DNI</th>
          <th>Nombre</th>
          <th>Primer Apellido</th>
          <th>Segundo Apellido</th>
      </tr>
        <?= $info->getInfo($search) ?>
  </table>
  <tbody>
    
  </tbody>
    <a href="formInsert.php">Añadir nuevo</a>
</body>

</html>
