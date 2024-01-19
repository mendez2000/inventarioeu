<?php

class ControladorLicencia{


  static public function ctrRegistro(){
    
    if(isset($_POST["registroSoftware"])){

			$tabla = "licencia";

			$datos = array("id_soft" => $_POST["registroSoftware"],
				               "ver" => $_POST["registroVersion"],
						   "id_tipo" => $_POST["registroTipo"],
							 "serie" => $_POST["registroSerie"]);
						

			$respuesta = ModeloLicencia::mdlRegistro($tabla, $datos);

			return $respuesta;

 

    }
}



}

