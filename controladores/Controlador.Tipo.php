<?php

class ControladorTipo{


  static public function ctrRegistro(){
    
    if(isset($_POST["Nom_Tip"])){

			$tabla = "tipo";

			$datos = array("nom" => $_POST["Nom_Tip"]);

			$respuesta = ModeloTipo::mdlRegistro($tabla, $datos);

			return $respuesta;

 

    }
}



}

