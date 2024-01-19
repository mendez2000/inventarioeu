<?php

class ControladorDepto{


  static public function ctrRegistro(){
    
    if(isset($_POST["registroDepto"])){

			$tabla = "dep";

			$datos = array("nom" => $_POST["registroDepto"]);

			$respuesta = ModeloDepto::mdlRegistro($tabla, $datos);

			return $respuesta;

 

    }
}



}

