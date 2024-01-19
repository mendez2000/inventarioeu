<?php

class ControladorUsuario{


  static public function ctrRegistro(){
    
    if(isset($_POST["registroEmpleado"])){


		

			$tabla = "user";

			$encriptarPassword = crypt($_POST["registroPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

			$datos = array("id_emp" => $_POST["registroEmpleado"],
		                   "id_rol" => $_POST["registroRoles"],
				           "email" => $_POST["registroEmail"],
						   "pass" => $encriptarPassword);
						   
			$respuesta = ModeloUsuario::mdlRegistro($tabla, $datos);

			return $respuesta;

 

    }
}

/*=============================================
	Ingreso al sistema y validar los parametros con similitudes
	=============================================*/

	public function ctrIngreso(){

		if(isset($_POST["ingresoEmail"])){

			$tabla = "user";
			$item = "email";
			$valor = $_POST["ingresoEmail"];

			$respuesta = ModeloUsuario::mdlSeleccionarRegistros($tabla, $item, $valor);

			$encriptarPassword = crypt($_POST["ingresoPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

/*=============================================
	Ivalidacion conicidencias Correo y pass
	=============================================*/
			if($respuesta["email"] == $_POST["ingresoEmail"] && $respuesta["pass"] == $encriptarPassword){

				$_SESSION["validarIngreso"] = "ok";

				echo '<script>

					if ( window.history.replaceState ) {

						window.history.replaceState( null, null, window.location.href );

					}

					window.location = "index.php?pagina=Limpiar";

				</script>';

			}else{


				echo '<script>

					if ( window.history.replaceState ) {

						window.history.replaceState( null, null, window.location.href );

					}

				</script>';

				echo '<div class="alert alert-danger">email o la contraseña no coinciden</div>';
			}
			
			

		}

	}


}

