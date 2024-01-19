<?php

class ControladorEstado{


  static public function ctrRegistro(){
    
    if(isset($_POST["Nom_Est"])){

			$tabla = "estado";

			$datos = array("nom" => $_POST["Nom_Est"]);

			$respuesta = ModeloEstado::mdlRegistro($tabla, $datos);

			return $respuesta;

 

    }
}



}

