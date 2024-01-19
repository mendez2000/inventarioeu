<?php

class ControladorCPU{


  static public function ctrRegistro(){
    
    if(isset($_POST["registroInventario"])){

			$tabla = "cpu";

			$datos = array("inv" => $_POST["registroInventario"],
			        "id_marca" => $_POST["registroMarca"],
					"modelo" => $_POST["registroModelo"],
					"serie" => $_POST["registroSerie"],
			        "tag" => $_POST["registroServiTag"],
				    "id_clas" => $_POST["registroClasificacion"],
				    "id_est" => $_POST["registroEstado"],
					"id_emp" => $_POST["registroOperador"],
					"nom_user" => $_POST["registroUsuarioPC"],
					"nom_equ" => $_POST["registroNombrePC"],
					"id_ubi" => $_POST["registroUbicacion"],
				    "id_edi" => $_POST["registroEdificio"],
					"id_dep" => $_POST["registroDep"],
					"id_proc" => $_POST["registroProcesador"],
					"id_ram" => $_POST["registroRAM"],
				    "id_hdd" => $_POST["registroHdd"],
					"id_tvideo" => $_POST["registroTvideo"],
					"id_mon" => $_POST["registroMonitor"],
					"id_ups" => $_POST["registroUPS"],
					"id_acc" => $_POST["registroAccesorio"],
					"id_sof" => $_POST["registroSoftware"],
					"id_edic" => $_POST["registro/SoftwareAdicional"],
					"id_ip" => $_POST["registroIP"],
					"obs" => $_POST["RegistroObservaciones"]);
						

			$respuesta = ModeloCPU::mdlRegistro($tabla, $datos);

			return $respuesta;

 

    }
}



}

