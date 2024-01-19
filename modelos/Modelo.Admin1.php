<?php

require_once "conexion.php";

class ModeloAdmin1
{

	static public function mdlRegistro($tabla, $datos)
	{

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_emp, email, pass) VALUES (:id_emp, :email, :pass)");
	
		
		
		$stmt->bindParam(":id_emp", $datos["id_emp"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":pass", $datos["pass"], PDO::PARAM_STR);

			if ($stmt->execute()) {
			return "ok";

		} else {

			print_r(Conexion::conectar()->errorInfo());

		}
	
		$stmt->close();
		$stmt = null;

	}

	

	


}
