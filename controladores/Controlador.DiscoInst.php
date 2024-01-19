<?php

class ControladorDiscoInst{


  static public function ctrRegistro(){
    
    if(isset($_POST["Nom_DiscoInst"])){

			$tabla = "discoinst";

			$datos = array("nom" => $_POST["Nom_DiscoInst"]);

			$respuesta = ModeloDiscoInst::mdlRegistro($tabla, $datos);

			return $respuesta;

 

    }
}

}

