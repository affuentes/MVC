<?php
require_once("../model/model_pais.php");

$operacion      = $_POST['operacion'];

$pais = new pais();

if($operacion == 'select_all')
    {
        $datos = $pais->select_all();
        echo json_encode($datos);
    }    
?>  
