<?php

require_once "conexion.php";

class ModeloLicencia
{

	static public function mdlRegistro($tabla, $datos)
	{
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_soft, ver, id_tipo, serie) VALUES (:id_soft, :ver, :id_tipo, :serie)");
	
		$stmt->bindParam(":id_soft", $datos["id_soft"], PDO::PARAM_STR);
		$stmt->bindParam(":ver", $datos["ver"], PDO::PARAM_STR);
	    $stmt->bindParam(":id_tipo", $datos["id_tipo"], PDO::PARAM_STR);
		$stmt->bindParam(":serie", $datos["serie"], PDO::PARAM_STR);

	
		if ($stmt->execute()) {

			return "ok";

		} else {

			print_r(Conexion::conectar()->errorInfo());

		}
	
		
		$stmt = null;

	}

	

	


}
