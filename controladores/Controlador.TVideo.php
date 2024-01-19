<?php

class ControladorTVideo{


  static public function ctrRegistro(){
    
    if(isset($_POST["registroMarca"])){

			$tabla = "tvideo";

			$datos = array("id_marca" => $_POST["registroMarca"],
				        	  "modelo" => $_POST["registroModelo"],
						 	"id_cap" => $_POST["registroCap"]);
						

			$respuesta = ModeloTVideo::mdlRegistro($tabla, $datos);

			return $respuesta;

 

    }
}



}

