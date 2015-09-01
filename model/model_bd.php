<?php

class connect{

    private $conexion;


    public function __construct(){
        try {
            $servername  = "localhost";
            $username    = "root";
            $password    = "root";
            $database    = "localizacion";
           
            $this->conexion = new PDO("mysql:host=$servername; dbname=$database", $username, $password);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        catch(PDOException $e){
            echo "Error de conexión: " . $e->getMessage();
            die();
        }

    }

    public function __destruct(){
        $this->conexion = null;
    }

    public function exec($sql){
        try {
            $result = $this->conexion->prepare($sql);
            $result->execute();
            $dato = $result->fetchall();
            return $dato; 
        }
        catch(PDOException $e){
            echo "Error consulta: " . $e->getMessage();
            die();
        }
    }

}


?>