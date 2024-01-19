<?php

class ControladorUPS{


  static public function ctrRegistro(){
    
    if(isset($_POST["registroInventario"])){

			$tabla = "ups";

			$datos = array("inv" => $_POST["registroInventario"],
			        "id_marca" => $_POST["registroMarca"],
				    "modelo" => $_POST["registroModelo"],
					"serie" => $_POST["registroSerie"],
			        	 "cap" => $_POST["registroCap"],
				       "id_est" => $_POST["registroEstado"]);
						

			$respuesta = ModeloUPS::mdlRegistro($tabla, $datos);

			return $respuesta;

 

    }
}



}

