<?php

require_once "conexion.php";

class ModeloCPU
{

	static public function mdlRegistro($tabla, $datos)
	{

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(inv, id_marca, modelo, serie, tag, id_clas, id_est, id_emp, nom_user, nom_equ, id_ubi, id_edi, id_dep, id_proc, id_ram, id_hdd, id_tvideo, id_mon, id_ups, id_acc, id_sof, id_edic, id_ip, obs) VALUES (:inv, :id_marca, :modelo, :serie, :tag, :id_clas, :id_est, :id_emp, :nom_user, :nom_equ, :id_ubi, :id_edi, :id_dep, :id_proc, :id_ram, :id_hdd, :id_tvideo, :id_mon, :id_ups, :id_acc, :id_sof, :id_edic, :id_ip, :obs)");
	
	
	   $stmt->bindParam(":inv", $datos["inv"], PDO::PARAM_STR);
	   $stmt->bindParam(":id_marca", $datos["id_marca"], PDO::PARAM_STR);
	   $stmt->bindParam(":modelo", $datos["modelo"], PDO::PARAM_STR);
	   $stmt->bindParam(":serie", $datos["serie"], PDO::PARAM_STR);
	   $stmt->bindParam(":tag", $datos["tag"], PDO::PARAM_STR);
	   $stmt->bindParam(":id_clas", $datos["id_clas"], PDO::PARAM_STR);
	   $stmt->bindParam(":id_est", $datos["id_est"], PDO::PARAM_STR);
	   $stmt->bindParam(":id_emp", $datos["id_emp"], PDO::PARAM_STR);
	   $stmt->bindParam(":nom_user", $datos["nom_user"], PDO::PARAM_STR);
	   $stmt->bindParam(":nom_equ", $datos["nom_equ"], PDO::PARAM_STR);
	   $stmt->bindParam(":id_ubi", $datos["id_ubi"], PDO::PARAM_STR);
	   $stmt->bindParam(":id_edi", $datos["id_edi"], PDO::PARAM_STR);
	   $stmt->bindParam(":id_dep", $datos["id_dep"], PDO::PARAM_STR);
	   $stmt->bindParam(":id_proc", $datos["id_proc"], PDO::PARAM_STR);
	   $stmt->bindParam(":id_ram", $datos["id_ram"], PDO::PARAM_STR);
	   $stmt->bindParam(":id_hdd", $datos["id_hdd"], PDO::PARAM_STR);
	   $stmt->bindParam(":id_tvideo", $datos["id_tvideo"], PDO::PARAM_STR);
       $stmt->bindParam(":id_mon", $datos["id_mon"], PDO::PARAM_STR);
	   $stmt->bindParam(":id_ups", $datos["id_ups"], PDO::PARAM_STR);
	   $stmt->bindParam(":id_acc", $datos["id_acc"], PDO::PARAM_STR);
	   $stmt->bindParam(":id_sof", $datos["id_sof"], PDO::PARAM_STR);
	   $stmt->bindParam(":id_edic", $datos["id_edic"], PDO::PARAM_STR);
	   $stmt->bindParam(":id_ip", $datos["id_ip"], PDO::PARAM_STR);
	   $stmt->bindParam(":obs", $datos["obs"], PDO::PARAM_STR);


	
		if ($stmt->execute()) {

			return "ok";

		} else {

			print_r(Conexion::conectar()->errorInfo());

		}
	
		
		$stmt = null;

	}

	

	


}
