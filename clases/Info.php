<?php
class Info extends Connection
{

  public function __construct()
  {
    parent::__construct();
  }

  public function getInfo($value = null)
  {

    if ($value) {
      //Creo la SQL que quiero lanzar
      $sql = "SELECT * FROM t_alumnos WHERE alum_nombre = ?";

      //prepare() lo que hace es preparar una sentencia para su ejecución y devuelve un obj
      $result = $this->db->prepare($sql);

      //execute() ejecuta la sentencia preparada con los valores que le hayamos pasado
      $result->execute(array($value));

      //Como lo que se devuelve es un objeto con forma de array
      //lo recorro con un foreach ENTERO
      foreach ($result->fetchAll(PDO::FETCH_ASSOC) as $row) {
        echo $row["alum_nombre"] . " " . $row["alum_apellido1"] . " " .
          $row["alum_apellido2"] . " " . $row["alum_dni"] . "<br>";
      }
    } else {
      $query = "SELECT * FROM t_alumnos";
      $result = $this->db->prepare($query);
      $result->execute(array($value));

      foreach ($result->fetchAll(PDO::FETCH_ASSOC) as $row) {
        echo $row["alum_nombre"] . " " . $row["alum_apellido1"] . " " .
          $row["alum_apellido2"] . " " . $row["alum_dni"] . "<br>";
      }
    }
  }
}

