<?php

class ControladorCapacidad{


  static public function ctrRegistro(){
    
    if(isset($_POST["registroCap"])){

			$tabla = "capacidad";

			$datos = array("nom" => $_POST["registroCap"]);

			$respuesta = ModeloCapacidad::mdlRegistro($tabla, $datos);

			return $respuesta;

 

    }
}



}

