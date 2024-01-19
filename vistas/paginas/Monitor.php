
<link rel="stylesheet" href="./assets/css/style_Monitor.css">
<div class="d-flex justify-content-center">
  <section class="form-login">
    <h5>Registro de Monitor</h5>
    <form method="POST">


    <label>Datos del Monitor*</label></br>
    <input class="controls" type="text" id="Nun_Inv" name="registroInventario" placeholder="Numero de Inventario"class="input-48" required>
 
    
    <?php 
include_once './modelos/conexion2.php';
      ?>
     <body>  
     <div id="contact-form">    
     <label>Marca*</label></br>  
         <select class="controls" type="text" id="marca" name="registroMarca" placeholder="Seleccione una Marca"class="input-48" required>
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
        
        </br></br>
       
     
   
  <table>
  <tr>
    <th> 
    <div class="form-group">
        <div class="input-group">
        <div class="input-group-prepend">
      <span class="input-group-text">
     
      </span>
      </div>
    <input type="text" class="form-control" id="Nom_Modelo" name="registroModelo" placeholder="Ingrese Modelo"class="input-48" required>
    </div>
      </div>


   
      <th>  
         <div class="form-group">
        <div class="input-group">
        <div class="input-group-prepend">
        <span class="input-group-text">

      </span>
      </div>
    <input type="text" class="form-control" id="Nom_Ser" name="registroSerie" placeholder="Ingrese Serie"class="input-48" required>
    </div>
      </div>
     </tr>
  </table>



        
  <table>
  <tr>
    <th> 
    <div class="form-group">
        <div class="input-group">
        <div class="input-group-prepend">
      <span class="input-group-text">
     
      </span>
      </div>
    <input type="text" class="form-control" id="Nom_Tipo" name="registroTipo" placeholder="Tipo de Monitor"class="input-48" required>
    </div>
      </div>
   
      <th>  
         <div class="form-group">
        <div class="input-group">
        <div class="input-group-prepend">
        <span class="input-group-text">

      </span>
      </div>
    <input type="text" class="form-control" id="Nom_Tam" name="registroTam" placeholder="Dimensiones"class="input-48" required>
    </div>
      </div>
     </tr>
  </table>


        <?php 
include_once './modelos/conexion2.php';
      ?>
     <body>  
     <div id="contact-form">      
      <label>Estado*</label></br>
      <select class="controls" type="text" id="estado" name="registroEstado" placeholder="Seleccione un Estado"class="input-48" required>
            <?php 
                $con=conexion();
                #Seleccionar Estado
                $sql='SELECT * FROM estado';
                $query=mysqli_query($con,$sql);
                while($row=mysqli_fetch_array($query)){
                  $id_est=$row['id' ];  
                  $nom_est=$row['nom'];
                ?>
                    <option value="<?php echo  $id_est?>"><?php echo $nom_est ?></option>  
                <?php
                }   
            ?>        
        </select>
        
     
      </br></br>
      <input class="buttons" type="submit" name="" value="Guardar">

      <?php

      $registro = ControladorMonitor::ctrRegistro();

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