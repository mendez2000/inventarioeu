<h3 class="text-center py-2">Inicio</h3>


<?php
if(!isset($_SESSION["validarIngreso"])){
	echo '<script>window.location = "index.php";</script>';
	return;
}else{
	if($_SESSION["validarIngreso"] != "ok"){
		echo '<script>window.location = "formularios.php?pagina=Limpiar";</script>';
		return;
	}
	}
