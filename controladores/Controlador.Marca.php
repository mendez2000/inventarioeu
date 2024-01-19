<?php

class ControladorMarca{


  static public function ctrRegistro(){
    
    if(isset($_POST["Nom_Marca"])){

			$tabla = "marca";

			$datos = array("nom" => $_POST["Nom_Marca"]);

			$respuesta = ModeloMarca::mdlRegistro($tabla, $datos);

			return $respuesta;

 

    }
}



}

