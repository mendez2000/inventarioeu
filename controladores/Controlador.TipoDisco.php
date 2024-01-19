<?php

class ControladorTipoDisco{


  static public function ctrRegistro(){
    
    if(isset($_POST["registroTdisco"])){

			$tabla = "tdisco";

			$datos = array("nom" => $_POST["registroTdisco"]);

			$respuesta = ModeloTipoDisco::mdlRegistro($tabla, $datos);

			return $respuesta;

 

    }
}



}

