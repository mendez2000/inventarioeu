<?php

class ControladorRoles{


  static public function ctrRegistro(){
    
    if(isset($_POST["Nom_Roles"])){

			$tabla = "rol";

			$datos = array("nom_rol" => $_POST["Nom_Roles"]);

			$respuesta = ModeloRoles::mdlRegistro($tabla, $datos);

			return $respuesta;

 

    }
}


}

