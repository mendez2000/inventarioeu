
<link rel="stylesheet" href="./assets/css/style_TVideo.css">
<div class="d-flex justify-content-center">
  <section class="form-login">
    <h5>Registro de Tarjetas de Video</h5>
    <form method="POST">




    
    <?php 
include_once './modelos/conexion2.php';
      ?>
     <body>  
     <div id="contact-form">      
      <label>Datos Tarjeta de Video*</label></br>
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

        <input class="controls" type="text" id="Nom_Modelo" name="registroModelo" placeholder="Modelo"class="input-48" required>

        <?php 
include_once './modelos/conexion2.php';
      ?>
     <body>  
     <div id="contact-form">      
      <label>Capacidad*</label></br>
      <select class="controls" type="text" id="Nom_Cap" name="registroCap" placeholder="Seleccione una Marca"class="input-48" required>
            <?php 
                $con=conexion();
                #Seleccionar Marca
                $sql='SELECT * FROM capacidad';
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
      <input class="buttons" type="submit" name="" value="Guardar">

      <?php

      $registro = ControladorTVideo::ctrRegistro();

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