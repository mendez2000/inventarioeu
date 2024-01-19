<?php

class ControladorClasificacion{


  static public function ctrRegistro(){
    
    if(isset($_POST["registroClas"])){

			$tabla = "clas";

			$datos = array("nom" => $_POST["registroClas"]);

			$respuesta = ModeloClasificacion::mdlRegistro($tabla, $datos);

			return $respuesta;

 

    }
}



}

