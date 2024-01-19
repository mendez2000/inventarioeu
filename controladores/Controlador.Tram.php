<?php

class ControladorTram{


  static public function ctrRegistro(){
    
    if(isset($_POST["registroTram"])){

			$tabla = "tram";

			$datos = array("nom" => $_POST["registroTram"]);

			$respuesta = ModeloTram::mdlRegistro($tabla, $datos);

			return $respuesta;

 

    }
}



}

