<?php

require_once "conexion.php";

class ModeloRoles
{

	static public function mdlRegistro($tabla, $datos)
	{

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nom_rol ) VALUES (:nom_rol)");
	
		$stmt->bindParam(":nom_rol", $datos["nom_rol"], PDO::PARAM_STR);

			if ($stmt->execute()) {

			return "ok";

		} else {

			print_r(Conexion::conectar()->errorInfo());

		}
	
	
		$stmt = null;

	}

	

	


}