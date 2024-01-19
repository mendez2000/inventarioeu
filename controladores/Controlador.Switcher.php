<?php

class ControladorSwitcher{


  static public function ctrRegistro(){
    
    if(isset($_POST["registroInventario"])){

			$tabla = "switcher";

			$datos = array("inv" => $_POST["registroInventario"],
			          "id_marca" => $_POST["registroMarca"],
				        "modelo" => $_POST["registroModelo"],
					     "serie" => $_POST["registroSerie"],
			           "puertos" => $_POST["registroCpuertos"],
					   "rfisica" => $_POST["registroRedfisica"],
					  "id_dep" => $_POST["registroDep"],
					   "id_edi" => $_POST["registroEdi"],
					    "id_est" => $_POST["registroEstado"]);
						

			$respuesta = ModeloSwitcher::mdlRegistro($tabla, $datos);//

			return $respuesta;

 

    }
}



}

