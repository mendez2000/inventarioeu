<?php

require_once "conexion.php";

class ModeloEdificio
{

	static public function mdlRegistro($tabla, $datos)
	{

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nom ) VALUES (:nom)");

	

		$stmt->bindParam(":nom", $datos["nom"], PDO::PARAM_STR);

	
		if ($stmt->execute()) {

			return "ok";

		} else {

			print_r(Conexion::conectar()->errorInfo());

		}
	
		
		$stmt = null;

	}

	

	


}
