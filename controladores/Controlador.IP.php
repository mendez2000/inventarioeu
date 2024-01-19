<?php

class ControladorIP{


  static public function ctrRegistro(){
    
    if(isset($_POST["registroIP"])){

			$tabla = "ip";

			$datos = array("nom" => $_POST["registroIP"]);

			$respuesta = ModeloIP::mdlRegistro($tabla, $datos);

			return $respuesta;

 

    }
}



}

