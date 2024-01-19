<?php

class ControladorCiudad{


  static public function ctrRegistro(){
    
    if(isset($_POST["Nom_Ciudad"])){

			$tabla = "ciu";

			$datos = array("nom" => $_POST["Nom_Ciudad"]);

			$respuesta = ModeloCiudad::mdlRegistro($tabla, $datos);

			return $respuesta;

 

    }
}

}

