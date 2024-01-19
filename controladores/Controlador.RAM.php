<?php

class ControladorRAM{


  static public function ctrRegistro(){
    
    if(isset($_POST["registroMarca"])){

			$tabla = "ram";

			$datos = array("id_marca" => $_POST["registroMarca"],
			         	      "id_tipo" => $_POST["registroTipo"],
							"id_cap" => $_POST["registroCap"],
							"fre" => $_POST["registroFre"]);

			$respuesta = ModeloRAM::mdlRegistro($tabla, $datos);

			return $respuesta;

 

    }
}



}

