<?php
  function conexion(){
$conexion =mysqli_connect("localhost","root","","bdinventarioeu");
return $conexion;
}
?>