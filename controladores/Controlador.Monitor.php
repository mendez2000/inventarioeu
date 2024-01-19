<?php

class ControladorMonitor{


  static public function ctrRegistro(){
    
    if(isset($_POST["registroInventario"])){

			$tabla = "monitor";

			$datos = array("inv" => $_POST["registroInventario"],
			         "id_marca" => $_POST["registroMarca"],
					  "modelo" => $_POST["registroModelo"],
					   "serie" => $_POST["registroSerie"],
			             "tipo" => $_POST["registroTipo"],
						 "tam" => $_POST["registroTam"],
				        "id_est" => $_POST["registroEstado"]);
						

			$respuesta = ModeloMonitor::mdlRegistro($tabla, $datos);

			return $respuesta;

 

    }
}



}

