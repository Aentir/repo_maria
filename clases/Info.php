<?php
    class Info extends Connection {

        public function __construct()
        {
            parent::__construct();
        }

        public function getInfo()
        {
            /*if(empty($_GET["alum_nombre"])){
                $search = "";
            }else{
                $search = $_GET["alum_nombre"];
            }*/
            $search = $_GET["alum_nombre"];
            var_dump($search);

            //Creo la SQL que quiero lanzar
            $sql = "SELECT * FROM t_alumnos WHERE alum_nombre = ?";

            //prepare() lo que hace es preparar una sentencia para su ejecución y devuelve un obj
            $result = $this->db->prepare($sql);

            //execute() ejecuta la sentencia preparada con los valores que le hayamos pasado
            $result->execute(array($search));
            
            //Como lo que se devuelve es un objeto con forma de array
            //lo recorro con un foreach ENTERO
            foreach ($result->fetchAll(PDO::FETCH_ASSOC) as $row) {
                echo $row["alum_nombre"] ." ". $row["alum_apellido1"] . " " .
                $row["alum_apellido2"] ." ". $row["alum_dni"] . "<br>";
            }
        }

    }
?>