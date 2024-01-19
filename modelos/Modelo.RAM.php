<?php

require_once "conexion.php";

class ModeloRAM
{

	static public function mdlRegistro($tabla, $datos)
	{

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_marca, id_tipo, id_cap, fre) VALUES (:id_marca, :id_tipo, :id_cap, :fre)");

	
		$stmt->bindParam(":id_marca", $datos["id_marca"], PDO::PARAM_STR);
		$stmt->bindParam(":id_tipo", $datos["id_tipo"], PDO::PARAM_STR);
		$stmt->bindParam(":id_cap", $datos["id_cap"], PDO::PARAM_STR);
		$stmt->bindParam(":fre", $datos["fre"], PDO::PARAM_STR);

	
		if ($stmt->execute()) {

			return "ok";

		} else {

			print_r(Conexion::conectar()->errorInfo());

		}
	
		
		$stmt = null;

	}

	

	


}
