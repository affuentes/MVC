<?php
require_once("model_bd.php");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class pais extends connect{
    
    private $IdPais;
    private $Nombre;
    
    public function __construct($IdPais, $Nombre){
        
        $this->IdPais  = $IdPais;        
        $this->Nombre  = $Nombre;
        parent::__construct();
        
    }
    
    public function __destruct(){
        parent::__destruct();
    }
    
    function getIdPais() {
        return $this->IdPais;
    }

    function getNombre() {
        return $this->Nombre;
    }

    function setIdPais($IdPais) {
        $this->IdPais = $IdPais;
    }

    function setNombre($Nombre) {
        $this->Nombre = $Nombre;
    }

    
    public function select_all() {
        $sql = "SELECT IdPais, Nombre FROM pais";
        return parent::exec($sql);

    } 
    
    public function select_one() {
        $sql = "SELECT IdPais, Nombre FROM pais WHERE IdPais = '$this->IdPais'";
        return parent::exec($sql);
    }
    
    public function insert() {
        $sql = "INSERT INTO pais (IdPais, Nombre) VALUES ('$this->IdPais', '$this->Nombre')";
        return parent::exec($sql);
    }
    
    public function update() {
        $sql = "UPDATE pais SET Nombre = '$this->Nombre' WHERE IdPais = '$this->IdPais'";
        return parent::exec($sql);
    }
    
    public function delete() {
        $sql = "DELETE FROM pais WHERE IdPais = '$this->IdPais'";
        return parent::exec($sql);
    }
    
}

