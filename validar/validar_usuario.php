<?php


$n=$_POST['ingresoEmail'];
$p=$_POST['ingresoPassword'];
$encriptarPassword = crypt($_POST["ingresoPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');


$conexion = mysqli_connect("localhost","root","","bdinventarioeu");
$consulta = "SELECT * FROM user WHERE email = '$n' and pass = '$encriptarPassword'";
$resultado = mysqli_query($conexion, $consulta);
$filas = mysqli_num_rows($resultado);
if($filas>0){

$_SESSION['user'] = $n;
header("location:/inventarioeu/formularios.php?pagina=Limpiar");
exit;
}
else{
  echo '<script>
alert("Usuario/Password Incorrectos");
alert("Vuelva a Intentarlo");
window.location = "/inventarioeu/index.php";
</script>';
exit;
}


