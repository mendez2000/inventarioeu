
<link rel="stylesheet" href="./assets/css/style_empl.css">
<div class="d-flex justify-content-center">
  <section class="form-login">
    <h5>Registro de Empleado</h5>
    <form method="POST">


    
<table>
  <tr>
    <th> 
    <div class="form-group">
        <div class="input-group">
        <div class="input-group-prepend">
      <span class="input-group-text">
        <i class="fas fa-user"></i>
      </span>
      </div>
    <input type="text" class="form-control" id="nombre" name="registroNombre" placeholder="Nombre"class="input-48" required>
    </div>
      </div>

   
      <th>  
         <div class="form-group">
        <div class="input-group">
        <div class="input-group-prepend">
      <span class="input-group-text">
        <i class="fas fa-user"></i>
      </span>
      </div>
    <input type="text" class="form-control" id="apellido" name="registroApellido" placeholder="Apellido"class="input-48" required>
    </div>
      </div>
     </tr>
  </table>
      

  <?php 
include_once './modelos/conexion2.php';
      ?>
     <body>  
     <div id="contact-form">      
      <label>Departamento*</label></br>
      <select class="controls" type="text" id="dep" name="regidtroApartamento" placeholder="Seleccione un Departamento"class="input-48" required>
            <?php 
                $con=conexion();
                #Seleccionar Depto
                $sql='SELECT * FROM dep';
                $query=mysqli_query($con,$sql);
                while($row=mysqli_fetch_array($query)){
                  $id_dep=$row['id' ];  
                  $nom_dep=$row['nom'];
                ?>
                    <option value="<?php echo  $id_dep?>"><?php echo $nom_dep ?></option>  
                <?php
                }   
            ?>        
        </select>


     
     <div id="contact-form">      
      <label>Edificio*</label></br>
      <select class="controls" type="text" id="edif" name="registroEdificio" placeholder="Seleccione un Edificio"class="input-48" required>
            <?php 
                $con=conexion();
                #Seleccionar Edif
                $sql='SELECT * FROM edi';
                $query=mysqli_query($con,$sql);
                while($row=mysqli_fetch_array($query)){
                  $id_edif=$row['id' ];  
                  $nom_edif=$row['nom'];
                ?>
                    <option value="<?php echo $id_edif?>"><?php echo $nom_edif ?></option>  
                <?php
                }   
            ?>        
        </select>



     
     <div id="contact-form">      
      <label>Ciudad*</label></br>
      <select class="controls" type="text" id="ciud" name="registroCiudad" placeholder="Seleccione una Ciudad"class="input-48" required>
            <?php 
                $con=conexion();
                #Seleccionar Rol
                $sql='SELECT * FROM ciu';
                $query=mysqli_query($con,$sql);
                while($row=mysqli_fetch_array($query)){
                  $id_ciu=$row['id' ];  
                  $nom_ciu=$row['nom'];
                ?>
                    <option value="<?php echo $id_ciu?>"><?php echo $nom_ciu ?></option>  
                <?php
                }   
            ?>        
        </select>



    
</br></br>
  
      <input class="buttons" type="submit" name="" value="Guardar">

        
      <?php

      $registro = ControladorEmpleado::ctrRegistro();

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