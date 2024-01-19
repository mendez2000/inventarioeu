<?php

require_once "conexion.php";

class ModeloUPS
{

	static public function mdlRegistro($tabla, $datos)
	{

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(inv, id_marca, modelo, serie, cap, id_est) VALUES (:inv, :id_marca, :modelo, :serie, :cap, :id_est)");
		//$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(inv, id_marca, modelo, cap, id_est) VALUES (:inv, :id_marca, :modelo, :cap, :id_est)");
	
		$stmt->bindParam(":inv", $datos["inv"], PDO::PARAM_STR);
		$stmt->bindParam(":id_marca", $datos["id_marca"], PDO::PARAM_STR);
	    $stmt->bindParam(":modelo", $datos["modelo"], PDO::PARAM_STR);
		$stmt->bindParam(":serie", $datos["serie"], PDO::PARAM_STR);
	    $stmt->bindParam(":cap", $datos["cap"], PDO::PARAM_STR);
	    $stmt->bindParam(":id_est", $datos["id_est"], PDO::PARAM_STR);

	
		if ($stmt->execute()) {

			return "ok";

		} else {

			print_r(Conexion::conectar()->errorInfo());

		}
	
		
		$stmt = null;

	}

	

	


}
