<?php

class ControladorEmpleado{


  static public function ctrRegistro(){
    
    if(isset($_POST["regidtroApartamento"])){

			$tabla = "emp";
		
			$datos = array("id_dep" => $_POST["regidtroApartamento"],
		                   "id_edi" => $_POST["registroEdificio"],
				           "id_ciu" => $_POST["registroCiudad"],
			               "nom" => $_POST["registroNombre"],
						   "ape" => $_POST["registroApellido"]);

			$respuesta = ModeloEmpleado::mdlRegistro($tabla, $datos);

			return $respuesta;

 

    }
}


}

