<?php

require_once "conexion.php";

class ModeloSwitcher
{

	static public function mdlRegistro($tabla, $datos)
	{

		//$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(inv, id_marca, modelo, serie, puertos, rfisica, id_dep, id_edi, id_est) VALUES (:inv, :id_marca, :modelo, :serie, :puertos, :rfisica, :id_dep:, :id_edi, :id_est)");

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(inv, id_marca, modelo, serie, puertos, rfisica, id_dep, id_edi, id_est) VALUES (:inv, :id_marca, :modelo, :serie, :puertos, :rfisica, :id_dep, :id_edi, :id_est)");

	
		$stmt->bindParam(":inv", $datos["inv"], PDO::PARAM_STR);
		$stmt->bindParam(":id_marca", $datos["id_marca"], PDO::PARAM_STR);
	    $stmt->bindParam(":modelo", $datos["modelo"], PDO::PARAM_STR);
	    $stmt->bindParam(":serie", $datos["serie"], PDO::PARAM_STR);
	   	$stmt->bindParam(":puertos", $datos["puertos"], PDO::PARAM_STR);
	    $stmt->bindParam(":rfisica", $datos["rfisica"], PDO::PARAM_STR);
		$stmt->bindParam(":id_dep", $datos["id_dep"], PDO::PARAM_STR);
		$stmt->bindParam(":id_edi", $datos["id_edi"], PDO::PARAM_STR);
	    $stmt->bindParam(":id_est", $datos["id_est"], PDO::PARAM_STR);

	
		if ($stmt->execute()) {

			return "ok";

		} else {

			print_r(Conexion::conectar()->errorInfo());

		}
	
		
		$stmt = null;

	}

	

	


}
