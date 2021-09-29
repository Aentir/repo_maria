<?php
class Select extends Connection
{

  public function __construct()
  {
    parent::__construct();
  }

  public function getInfo($value = null)
  {

    //Si getInfo() recibe algún parametro (GET/POST) se lo pasará al IF, sino, entrará en el else
    if ($value) {
      //Creo la SQL que quiero lanzar
      $sql = "SELECT alum_nombre, alum_dni, alum_apellido1, alum_apellido2 FROM t_alumnos WHERE alum_nombre = ?";

      //prepare() lo que hace es preparar una sentencia para su ejecución y devuelve un obj
      $result = $this->db->prepare($sql);

      //execute() ejecuta la sentencia preparada con los valores que le hayamos pasado
      $result->execute(array($value));

      //Como lo que se devuelve es un objeto con forma de array
      //lo recorro con un foreach ENTERO
        $output = "";
      foreach ($result->fetchAll(PDO::FETCH_ASSOC) as $row) {
        /*echo $row["alum_nombre"] . " " . $row["alum_apellido1"] . " " .
          $row["alum_apellido2"] . " " . $row["alum_dni"] . "<br>";*/
          $output .= "<td>" . $row["alum_nombre"] . "</td>";
          $output .= "<td>" . $row["alum_dni"] . "</td>";
          $output .= "<td>" . $row["alum_apellido1"] . "</td>";
          $output .= "<td>" . $row["alum_apellido2"] . "</td>";
      }
    
    } else {
      $query = "SELECT alum_nombre, alum_dni, alum_apellido1, alum_apellido2 FROM t_alumnos";
      $result = $this->db->prepare($query);
      $result->execute(array());
      $output = "";
      foreach ($result->fetchAll(PDO::FETCH_ASSOC) as $row) {
        /*echo $row["alum_nombre"] . " " . $row["alum_apellido1"] . " " .
          $row["alum_apellido2"] . " " . $row["alum_dni"] . "<br>";*/
          $output .= "<tr>";

          //Este if comprueba que si la posición del array que recorremos (consulta) contiene la condición, se le aplicarán los cambios


          /*if($row["alum_nombre"] == "Juan") {
            $output .= "<td style='background-color:salmon'>" . $row["alum_nombre"] . "</td>";
          } else {
            $output .= "<td>" . $row["alum_nombre"] . "</td>";
          }*/
          $output .= "<td>" . $row["alum_nombre"] . "</td>";
          $output .= "<td>" . $row["alum_dni"] . "</td>";
          $output .= "<td>" . $row["alum_apellido1"] . "</td>";
          $output .= "<td>" . $row["alum_apellido2"] . "</td>";
          $output .= "</tr>";
      }
      
    }
    return $output;
  }
}
?>
