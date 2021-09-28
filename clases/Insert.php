<?php

class Insert extends Connection {

    public function __construct()
    {
        parent::__construct();
    }

    public function insertData($values = null)
    {

        if($values) {

                $dni = $values["alum_dni"];
                $name = $values["alum_nombre"];
                $firstname = $values["alum_apellido1"];
                $lastname = $values["alum_apellido2"];
            

            $sql = "INSERT INTO t_alumnos (alum_dni, alum_nombre, alum_apellido1, alum_apellido2) 
                VALUES (:alum_dni, :alum_nombre, :alum_apellido1, :alum_apellido2)";

            $result = $this->db->prepare($sql);
            $result->bindParam(":alum_dni", $dni, PDO::PARAM_STR, 9);
            $result->bindParam(":alum_nombre", $name, PDO::PARAM_STR, 25);
            $result->bindParam(":alum_apellido1", $firstname, PDO::PARAM_STR, 25);
            $result->bindParam(":alum_apellido2", $lastname, PDO::PARAM_STR, 25);
            $result->execute();
        }
    }
}


?>