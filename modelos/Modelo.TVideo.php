<?php

require_once "conexion.php";

class ModeloTVideo
{

	static public function mdlRegistro($tabla, $datos)
	{

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_marca, modelo, id_cap) VALUES (:id_marca, :modelo, :id_cap)");
	
		$stmt->bindParam(":id_marca", $datos["id_marca"], PDO::PARAM_STR);
		$stmt->bindParam(":modelo", $datos["modelo"], PDO::PARAM_STR);
	    $stmt->bindParam(":id_cap", $datos["id_cap"], PDO::PARAM_STR);

	
		if ($stmt->execute()) {

			return "ok";

		} else {

			print_r(Conexion::conectar()->errorInfo());

		}
	
		
		$stmt = null;

	}

	

	


}
