<?php

class ControladorAccesorios{


  static public function ctrRegistro(){
    
    if(isset($_POST["registroInventario"])){

			$tabla = "acc";

			$datos = array("inv" => $_POST["registroInventario"],
			         "id_marca" => $_POST["registroMarca"],
				       "modelo" => $_POST["registroModelo"],
					   "serie" => $_POST["registroSerie"],
			             "tipo" => $_POST["registroTipo"],
				        "id_est" => $_POST["registroEstado"]);
						

			$respuesta = ModeloAccesorios::mdlRegistro($tabla, $datos);

			return $respuesta;

 

    }
}



}

