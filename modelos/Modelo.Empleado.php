<?php

require_once "conexion.php";

class ModeloEmpleado
{

	static public function mdlRegistro($tabla, $datos)
	{

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_dep, id_edi, id_ciu, nom, ape) VALUES (:id_dep, :id_edi, :id_ciu, :nom, :ape)");
	
		
		$stmt->bindParam(":id_dep", $datos["id_dep"], PDO::PARAM_STR);
		$stmt->bindParam(":id_edi", $datos["id_edi"], PDO::PARAM_STR);
		$stmt->bindParam(":id_ciu", $datos["id_ciu"], PDO::PARAM_STR);
		$stmt->bindParam(":nom", $datos["nom"], PDO::PARAM_STR);
		$stmt->bindParam(":ape", $datos["ape"], PDO::PARAM_STR);

			if ($stmt->execute()) {

			return "ok";

		} else {

			print_r(Conexion::conectar()->errorInfo());

		}
	
	
	
		$stmt = null;

	}

	

	


	
}
