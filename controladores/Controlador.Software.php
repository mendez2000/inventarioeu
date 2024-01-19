<?php

class ControladorSoftware{


  static public function ctrRegistro(){
    
    if(isset($_POST["Nom_Sof"])){

			$tabla = "software";

			$datos = array("nom" => $_POST["Nom_Sof"]);

			$respuesta = ModeloSoftware::mdlRegistro($tabla, $datos);

			return $respuesta;

 

    }
}



}

