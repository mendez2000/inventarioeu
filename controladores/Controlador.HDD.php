<?php

class ControladorHDD{


  static public function ctrRegistro(){
    
    if(isset($_POST["registroMarca"])){

			$tabla = "hdd";

			$datos = array("id_marca" => $_POST["registroMarca"],
		                    	"modelo" => $_POST["registroModelo"],
				        	  "serie" => $_POST["registroSerie"],
							  "id_tdisco" => $_POST["registroTdisco"],
							 "id_cap" => $_POST["registroCap"],
							"id_inst" => $_POST["registroInst"]);
						

			$respuesta = ModeloHDD::mdlRegistro($tabla, $datos);

			return $respuesta;

 

    }
}



}

