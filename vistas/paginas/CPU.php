
<link rel="stylesheet" href="./assets/css/style_CPU.css">
<div class="d-flex justify-content-center">
  <section class="form-login">
    <h5>Datos Generales del CPU</h5>
    <form method="POST">




 <table>
   
 <div class="box-body">
                    <div class="row">
                    <div class="col-md-2">
                                <label>Num.Inventario*</label>
                                        <span class="input-group-btn"> 
                                    </span>
                                    <input type="text" id="Nun_Inv" name="registroInventario" class="form-control input-sm" onkeyup="PasarValor();" required style="width: 100%" placeholder="Numero de Inventario">
                                </div>
                            </div>
                        </div>
    </table>





    




<?php 
include_once './modelos/conexion2.php';
?>
<div class="row">
  <div class="col-md-2">
    <label>Marca*</label>
    <select class="controls" type="text" id="marca" name="registroMarca" placeholder="Seleccione una Marca" class="input-48" required>
      <?php 
        $con=conexion();
        #Seleccionar Marca
        $sql='SELECT * FROM marca';
        $query=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($query)){
          $id_mar=$row['id' ];  
          $nom_mar=$row['nom'];
      ?>
      <option value="<?php echo  $id_mar?>"><?php echo $nom_mar ?></option>  
      <?php
        }   
      ?>        
    </select>
  </div>
  
  <div class="col-md-2">
    <label>Modelo*</label>
    <input class="controls" type="text" id="Modelo" name="registroModelo" placeholder="Modelo" class="input-48" required>
  </div>

  <div class="col-md-2">
    <label>Serie</label>
    <input class="controls" type="text" id="Nun_Serie" name="registroSerie" placeholder="Serie">
  </div>

  <div class="col-md-2">
    <label>Service Tag</label>
    <input class="controls" type="text" id="Nun_Tag" name="registroServiTag" placeholder="Service Tag">
    </div>



  <?php 
include_once './modelos/conexion2.php';
      ?>
  <div class="col-md-2">
            <label>Clasificacion*</label>
            <select class="controls" type="text" id="Clas" name="registroClasificacion" placeholder="Seleccione  Clasificacion" class="input-48" required  >
      
                  <?php 
                      $con=conexion();
                      #Seleccionar Clasificacion
                      $sql='SELECT * FROM clas';
                      $query=mysqli_query($con,$sql);
                      while($row=mysqli_fetch_array($query)){
                        $id_mar=$row['id' ];  
                        $nom_mar=$row['nom'];
                      ?>
                          <option value="<?php echo  $id_mar?>"><?php echo $nom_mar ?></option>  
                      <?php
                      }   
                  ?>        
              </select>
          </div>

        


        <?php 
        include_once './modelos/conexion2.php';
        ?>
  <div class="col-md-2">
          <label>Estado*</label>
          <select class="controls" type="text" id="Estado" name="registroEstado" placeholder="Seleccione Estado" class="input-48" required>
      
                <?php 
                    $con=conexion();
                    #Seleccionar Marca
                    $sql='SELECT * FROM estado';
                    $query=mysqli_query($con,$sql);
                    while($row=mysqli_fetch_array($query)){
                      $id_mar=$row['id' ];  
                      $nom_mar=$row['nom'];
                    ?>
                        <option value="<?php echo  $id_mar?>"><?php echo $nom_mar ?></option>  
                    <?php
                    }   
                ?>        
            </select>
        </div>



        <?php 
      include_once './modelos/conexion2.php';
            ?>
      <div class="col-lg-2 col-md-2">
        <label>Operador</label></br>
        <select class="controls" type="text" id="Operador" name="registroOperador" placeholder="Seleccione Operador" class="input-48" required>
              <?php 
                  $con=conexion();
                  #Seleccionar Marca
                  $sql='SELECT * FROM emp';
                  $query=mysqli_query($con,$sql);
                  while($row=mysqli_fetch_array($query)){
                    $id_mar=$row['id' ];  
                    $nom_mar=$row['nom'];
                    $nom_ape=$row['ape'];
                  ?>
                      <option value="<?php echo  $id_mar?>"><?php echo $nom_mar. '  ' .$nom_ape  ?></option>  
                  <?php
                  }   
              ?>        
          </select>
      </div>
    
            

        
      <div class="col-lg-2 col-md-2">
          <label>Usuario de Equipo*</label>
          <input class="controls" type="text" id="User_PC" name="registroUsuarioPC" placeholder="Nombre Usuario " class="input-48" required>
      </div>
      
      
      <div class="col-lg-2 col-md-2">
    <label>Nombre de Equipo*</label>
    <input class="controls" type="text" id="Nom_PC" name="registroNombrePC" placeholder="Nombre de Equipo" class="input-48" required>
    </div>
   
  
<?php 
include_once './modelos/conexion2.php';
    ?>
 <div class="col-lg-2 col-md-2">
    <label>Ubicacion*</label></br>
    <select class="controls" type="text" id="ubi" name="registroUbicacion" placeholder="Seleccione una Ubicacion"class="input-48" required>
          <?php 
              $con=conexion();
              #Seleccionar Ubicacion
              $sql='SELECT * FROM ciu';
              $query=mysqli_query($con,$sql);
              while($row=mysqli_fetch_array($query)){
                $id_mar=$row['id' ];  
                $nom_mar=$row['nom'];
              ?>
                  <option value="<?php echo  $id_mar?>"><?php echo $nom_mar ?></option>  
              <?php
              }   
          ?>        
      </select></div> 


  <?php 
include_once './modelos/conexion2.php';
      ?>
 <div class="col-lg-2 col-md-2">
      <label>Edificio*</label></br>
      <select class="controls" type="text" id="edificio" name="registroEdificio" placeholder="Seleccione Edificio"class="input-48" required>
            <?php 
                $con=conexion();
                #Seleccionar Edificio
                $sql='SELECT * FROM edi';
                $query=mysqli_query($con,$sql);
                while($row=mysqli_fetch_array($query)){
                  $id_mar=$row['id' ];  
                  $nom_mar=$row['nom'];
                ?>
                    <option value="<?php echo  $id_mar?>"><?php echo $nom_mar ?></option>  
                <?php
                }   
            ?>        
        </select></div>

  <?php 
include_once './modelos/conexion2.php';
      ?>
 <div class="col-lg-2 col-md-2">
      <label>Departamento*</label></br>
      <select class="controls" type="text" id="dep" name="registroDep" placeholder="Seleccione un Departamento"class="input-48" required>
            <?php 
                $con=conexion();
                #Seleccionar Departamento
                $sql='SELECT * FROM dep';
                $query=mysqli_query($con,$sql);
                while($row=mysqli_fetch_array($query)){
                  $id_mar=$row['id' ];  
                  $nom_mar=$row['nom'];
                ?>
                    <option value="<?php echo  $id_mar?>"><?php echo $nom_mar ?></option>  
                <?php
                }   
            ?>        
        </select>
        </div>


</div>



        <h5>Datos del Hardware</h5>


        <table>             




  <?php 
include_once './modelos/conexion2.php';
      ?>
      <div class="row">
     <div class="col-lg-3 col-md-3">
      <label>Procesador*</label>
      <select class="controls" type="text" id="procesador" name="registroProcesador" placeholder="Seleccione Procesador"class="input-48" required>
      <?php 
$con=conexion();
#Seleccionar Procesador
$sql='SELECT * FROM proc';
$query=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($query)){
    $id_proc=$row['id' ]; 
    $id_mar=$row['id_marca' ]; 
    $nom_mod=$row['modelo'];
    $nom_cap=$row['id_cap' ]; 

    #Obtener nombre de marca
    $sql_marca = "SELECT nom FROM marca WHERE id = '$id_mar'";
    $query_marca = mysqli_query($con, $sql_marca);
    $marca = mysqli_fetch_array($query_marca)['nom'];

    #Obtener nombre de capacidad
    $sql_cap = "SELECT nom FROM capacidad WHERE id = '$nom_cap'";
    $query_cap = mysqli_query($con, $sql_cap);
    $capacidad = mysqli_fetch_array($query_cap)['nom'];
?>
    <option value="<?php echo  $id_proc?>">
        <?php echo $marca . ' ' . $nom_mod . ' ' . $capacidad ?>
    </option>  
<?php
}   
?>
        </select>
           
        </div>

<?php 
include_once './modelos/conexion2.php';
$con = conexion();
#Seleccionar Ram
$sql = "SELECT ram.id_ram as id, marca.nom as marca, tram.nom as tipo, capacidad.nom as capacidad, ram.fre as frecuencia 
        FROM ram 
        INNER JOIN marca ON ram.id_marca = marca.id 
        INNER JOIN capacidad ON ram.id_cap = capacidad.id 
        INNER JOIN tram ON ram.id_tipo = tram.id";

$stmt = $con->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
$opciones = array();
while ($row = $result->fetch_assoc()) {
  if (is_array($row) && count($row) > 0) {
    $opciones[] = $row;
  }
}
?>

<div class="col-lg-3 col-md-3">
  <label>Memoria RAM*</label>
  <select class="controls" type="text" id="RAM" name="registroRAM" placeholder="Seleccione RAM" class="input-48" required>
    <?php foreach ($opciones as $opcion) { ?>
      <option value="<?php echo $opcion['id'] ?>"><?php echo $opcion['marca'] . ' ' . $opcion['tipo'] . ' ' . $opcion['capacidad'] . ' ' . $opcion['frecuencia'] ?></option>
    <?php } ?>
  </select>

  </div>
 
<?php 
include_once './modelos/conexion2.php';
      ?>
     <div class="col-lg-3 col-md-3">
      <label>Almacenamiento*</label>
      <select class="controls" type="text" id="hdd" name="registroHdd" placeholder="Seleccione Almacenamiento"class="input-48" required>
      <?php 
$con=conexion();
#Seleccionar Almacenamiento
$sql='SELECT * FROM hdd';
$query=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($query)){
  $nom_id=$row['id' ];  
  $nom_marca=$row['id_marca' ]; 
  $nom_tdisco=$row['id_tdisco' ]; 
  $nom_cap=$row['id_cap' ]; 
  $nom_inst=$row['id_inst' ]; 

  #Obtener marca
  $sql_marca = "SELECT nom FROM marca WHERE id = '$nom_marca'";
  $query_marca = mysqli_query($con, $sql_marca);
  $marca = mysqli_fetch_array($query_marca)['nom'];
 
    #Obtener nombre de tipo de disco
    $sql_tdisco = "SELECT nom FROM tdisco WHERE id = '$nom_tdisco'";
    $query_tdisco = mysqli_query($con, $sql_tdisco);
    $tdisco = mysqli_fetch_array($query_tdisco)['nom'];

    #Obtener capacidad
    $sql_cap = "SELECT nom FROM capacidad WHERE id = '$nom_cap'";
    $query_cap = mysqli_query($con, $sql_cap);
    $cap = mysqli_fetch_array($query_cap)['nom'];

       #Obtener tipo de Instalacion
       $sql_inst = "SELECT nom FROM discoinst WHERE id = '$nom_inst'";
       $query_inst = mysqli_query($con, $sql_inst);
       $inst = mysqli_fetch_array($query_inst)['nom'];
?>
    <option value="<?php echo  $nom_id?>">
        <?php echo $marca . ' ' . $tdisco . ' ' . $cap . ' ' . $inst?>
    </option>  
<?php
}   
?>
        </select>

        </div>

        <?php 
include_once './modelos/conexion2.php';
$con = conexion();

$sql = "SELECT tvideo.id, marca.nom, tvideo.modelo, capacidad.nom as capacidad 
        FROM tvideo 
        INNER JOIN marca ON tvideo.id_marca = marca.id 
        INNER JOIN capacidad ON tvideo.id_cap = capacidad.id";

$stmt = $con->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
$opciones = array();
while ($row = $result->fetch_assoc()) {
  if (is_array($row) && count($row) > 0) {
    $opciones[] = $row;
  }
}
?>

<div class="col-lg-3 col-md-3">
  <label>Tarjeta de Video*</label>
  <select class="controls" type="text" id="marca" name="registroTvideo" placeholder="Seleccione Tarjeta de Video" class="input-48" required>
    <?php foreach ($opciones as $opcion) { ?>
      <option value="<?php echo $opcion['id'] ?>"><?php echo $opcion['nom'] . ' ' . $opcion['modelo'] . ' ' . $opcion['capacidad'] ?></option>
    <?php } ?>
  </select>

  </div>

<?php 
include_once './modelos/conexion2.php';
$con = conexion();

$sql = "SELECT monitor.id, marca.nom, monitor.tipo, monitor.tam, monitor.id_marca 
        FROM monitor
        INNER JOIN marca ON monitor.id_marca = marca.id";

$stmt = $con->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
$opciones = array();
while ($row = $result->fetch_assoc()) {
  if (is_array($row) && count($row) > 0) {
    $opciones[] = $row;
  }
}
?>

<div class="col-lg-3 col-md-3">
  <label>Monitor</label>
  <select class="controls" type="text" id="marca" name="registroMonitor" placeholder="Seleccione Monitor" class="input-48" required>
    <?php foreach ($opciones as $opcion) { ?>
      <option value="<?php echo $opcion['id'] ?>"><?php echo $opcion['nom'] . ' ' . $opcion['tipo'] . ' ' . $opcion['tam'] ?></option>
    <?php } ?>
  </select>

  </div>

<?php 
include_once './modelos/conexion2.php';
$con = conexion();

$sql = "SELECT ups.id, marca.nom, ups.cap FROM ups
        INNER JOIN marca ON ups.id_marca = marca.id";

$stmt = $con->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
$opciones = array();
while ($row = $result->fetch_assoc()) {
  if (is_array($row) && count($row) > 0) {
    $opciones[] = $row;
  }
}
?>

<div class="col-lg-3 col-md-3">
  <label>UPS*</label>
  <select class="controls" type="text" id="UPS" name="registroUPS" placeholder="Seleccione UPS" class="input-48" required>
    <?php foreach ($opciones as $opcion) { ?>
      <option value="<?php echo $opcion['id'] ?>"><?php echo $opcion['nom'] . ' ' . $opcion['cap'] ?></option>
    <?php } ?>
  </select>

  </select>

  </div>
   
  <?php 
include_once './modelos/conexion2.php';
$con = conexion();

$sql = "SELECT acc.id, acc.tipo, marca.nom FROM acc
        INNER JOIN marca ON acc.id_marca = marca.id";

$stmt = $con->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
$opciones = array();
while ($row = $result->fetch_assoc()) {
  if (is_array($row) && count($row) > 0) {
    $opciones[] = $row;
  }
}
?>

<div class="col-lg-3 col-md-3">
  <label>Accesorio</label>
  <select class="controls" type="text" id="accesorio" name="registroAccesorio" placeholder="Seleccione un Accesorio" class="input-48" required>
    <?php foreach ($opciones as $opcion) { ?>
      <option value="<?php echo $opcion['id'] ?>"><?php echo $opcion['nom'] . ' ' . $opcion['tipo'] ?></option>
    <?php } ?>
  </select>
</div>

</div>





        <h5>Datos del Software</h5>     



        <?php 
include_once './modelos/conexion2.php';
$con = conexion();

$sql = "SELECT licencia.id, software.nom, licencia.ver, tipo.nom as tipo_nom FROM licencia
        INNER JOIN software ON licencia.id_soft = software.id
        INNER JOIN tipo ON licencia.id_tipo = tipo.id";

$stmt = $con->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
$opciones = array();
while ($row = $result->fetch_assoc()) {
  if (is_array($row) && count($row) > 0) {
    $opciones[] = $row;
  }
}
?>
     <div class="row">
<div class="col-lg-3 col-md-3">
  <label>Software*</label>
  <select class="controls" type="text"  id="Software" name="registroSoftware" placeholder="Seleccione una Licencia" class="input-48" required>
    <?php foreach ($opciones as $opcion) { ?>
      <option value="<?php echo $opcion['id'] ?>"><?php echo $opcion['nom'] . ' ' . $opcion['ver'] . ' ' . $opcion['tipo_nom'] ?></option>
    <?php } ?>
  </select>
</div>


<?php 
include_once './modelos/conexion2.php';
      ?>
<div class="col-lg-3 col-md-3">
      <label>Software/Adicional*</label></br>
      <select class="controls" type="text" id="Software/Adicional" name="registro/SoftwareAdicional" placeholder="Seleccione un Departamento"class="input-48" required>
            <?php 
                $con=conexion();
                #Seleccionar Software
                $sql='SELECT * FROM software';
                $query=mysqli_query($con,$sql);
                while($row=mysqli_fetch_array($query)){
                  $id_mar=$row['id' ];  
                  $nom_mar=$row['nom'];
                ?>
                    <option value="<?php echo  $id_mar?>"><?php echo $nom_mar ?></option>  
                <?php
                }   
            ?>        
        </select>
        </div>


<?php 
include_once './modelos/conexion2.php';
    ?>
<div class="col-lg-3 col-md-3">
    <label>Direccion IP</label>
    <select class="controls" type="text" id="ip" name="registroIP" placeholder="Seleccione una IP"class="input-48" required>
          <?php 
              $con=conexion();
              #Seleccionar Marca
              $sql='SELECT * FROM ip';
              $query=mysqli_query($con,$sql);
              while($row=mysqli_fetch_array($query)){
                $id=$row['id' ]; 
                $nom=$row['nom'];
                 
              ?>
                  <option value="<?php echo  $id?>"><?php echo $nom ?></option>  
              <?php
              }   
          ?>        
      </select>

       </table>
          
           <textarea  class="d-grid md-8 col-9 mx-Left" placeholder="Observaciones/Opcional" id="obs" name="RegistroObservaciones"style="height: 60px"></textarea>


<div class="d-grid gap-2 col-4 mx-auto">
 <input class="buttons" type="submit"value="Guardar"> 
             
                       
      <?php
      $registro = ControladorCPU::ctrRegistro();
      if ($registro == "ok") {

        echo '<script>
if ( window.history.replaceState){
 window.history.replaceState( null, null, window.location.href );
}
</script>';

        echo '<div class="alert alert-success">Registrado exitoso</div>';
        
      }
      ?>
    </form>
  </section>

</div>