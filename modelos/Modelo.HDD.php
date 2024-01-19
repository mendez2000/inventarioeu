<?php

require_once "conexion.php";

class ModeloHDD
{

	static public function mdlRegistro($tabla, $datos)
	{

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_marca, modelo, serie, id_tdisco, id_cap, id_inst) VALUES (:id_marca, :modelo, :serie, :id_tdisco, :id_cap, :id_inst)");
	
	
		$stmt->bindParam(":id_marca", $datos["id_marca"], PDO::PARAM_STR);
		$stmt->bindParam(":modelo", $datos["modelo"], PDO::PARAM_STR);
		$stmt->bindParam(":serie", $datos["serie"], PDO::PARAM_STR);
		$stmt->bindParam(":id_tdisco", $datos["id_tdisco"], PDO::PARAM_STR);
		$stmt->bindParam(":id_cap", $datos["id_cap"], PDO::PARAM_STR);
	    $stmt->bindParam(":id_inst", $datos["id_inst"], PDO::PARAM_STR);

	
		if ($stmt->execute()) {

			return "ok";

		} else {

			print_r(Conexion::conectar()->errorInfo());

		}
	
		
		$stmt = null;

	}

	

	


}
