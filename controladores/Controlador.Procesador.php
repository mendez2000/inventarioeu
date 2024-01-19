<?php

class ControladorProcesador{


  static public function ctrRegistro(){
    
    if(isset($_POST["registroMarca"])){

			$tabla = "proc";

			$datos = array("id_marca" => $_POST["registroMarca"],
			         	      "modelo" => $_POST["registroModelo"],
							"id_cap" => $_POST["registroCap"]);
							

			$respuesta = ModeloProcesador::mdlRegistro($tabla, $datos);

			return $respuesta;

 

    }
}



}

