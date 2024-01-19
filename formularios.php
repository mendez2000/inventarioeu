

<?php

require_once "controladores/plantilla.controlador.php";

require_once "controladores/Controlador.Roles.php";
require_once "modelos/Modelo.Roles.php";

require_once "controladores/Controlador.Depto.php";
require_once "modelos/Modelo.Depto.php";

require_once "controladores/Controlador.Edificio.php";
require_once "modelos/Modelo.Edificio.php";

require_once "controladores/Controlador.Ciudad.php";
require_once "modelos/Modelo.Ciudad.php";

require_once "controladores/Controlador.Empleado.php";
require_once "modelos/Modelo.Empleado.php";

require_once "controladores/Controlador.Usuario.php";
require_once "modelos/Modelo.Usuario.php";

require_once "controladores/Controlador.Admin1.php";
require_once "modelos/Modelo.Admin1.php";

require_once "controladores/Controlador.Marca.php";
require_once "modelos/Modelo.Marca.php";

require_once "controladores/Controlador.Estado.php";
require_once "modelos/Modelo.Estado.php";

require_once "controladores/Controlador.Tipo.php";
require_once "modelos/Modelo.Tipo.php";

require_once "controladores/Controlador.RAM.php";
require_once "modelos/Modelo.RAM.php";

require_once "controladores/Controlador.HDD.php";
require_once "modelos/Modelo.HDD.php";

require_once "controladores/Controlador.TVideo.php";
require_once "modelos/Modelo.TVideo.php";

require_once "controladores/Controlador.UPS.php";
require_once "modelos/Modelo.UPS.php";

require_once "controladores/Controlador.Accesorios.php";
require_once "modelos/Modelo.Accesorios.php";

require_once "controladores/Controlador.Monitor.php";
require_once "modelos/Modelo.Monitor.php";

require_once "controladores/Controlador.Switcher.php";
require_once "modelos/Modelo.Switcher.php";

require_once "controladores/Controlador.Licencia.php";
require_once "modelos/Modelo.Licencia.php";

require_once "controladores/Controlador.Software.php";
require_once "modelos/Modelo.Software.php";

require_once "controladores/Controlador.capacidad.php";
require_once "modelos/Modelo.Capacidad.php";

require_once "controladores/Controlador.TipoDisco.php";
require_once "modelos/Modelo.TipoDisco.php";

require_once "controladores/Controlador.DiscoInst.php";
require_once "modelos/Modelo.DiscoInst.php";

require_once "controladores/Controlador.Tram.php";
require_once "modelos/Modelo.Tram.php";

require_once "controladores/Controlador.IP.php";
require_once "modelos/Modelo.IP.php";

require_once "controladores/Controlador.CPU.php";
require_once "modelos/Modelo.CPU.php";

require_once "controladores/Controlador.Procesador.php";
require_once "modelos/Modelo.Procesador.php";

require_once "controladores/Controlador.Clasificacion.php";
require_once "modelos/Modelo.Clasificacion.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();


