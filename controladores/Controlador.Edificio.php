<?php

class ControladorEdificio{


  static public function ctrRegistro(){
    
    if(isset($_POST["Nom_Edif"])){

			$tabla = "edi";

			$datos = array("nom" => $_POST["Nom_Edif"]);

			$respuesta = ModeloEdificio::mdlRegistro($tabla, $datos);

			return $respuesta;

 

    }
}



}

