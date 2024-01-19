
<link rel="stylesheet" href="./assets/css/style_Licencia.css">
<div class="d-flex justify-content-center">
  <section class="form-login">
    <h5>Registro de Licencia</h5>
    <form method="POST">





    <?php 
include_once './modelos/conexion2.php';
      ?>
     <body>  
     <div id="contact-form">      
      <label>Datos del Software*</label></br>
      <select class="controls" type="text" id="Soft" name="registroSoftware" placeholder="Seleccione Tipo de Licencia"class="input-48" required>
            <?php 
                $con=conexion();
                #Seleccionar Nombre del Software
                $sql='SELECT * FROM software';
                $query=mysqli_query($con,$sql);
                while($row=mysqli_fetch_array($query)){
                  $id_soft=$row['id' ];  
                  $nom_soft=$row['nom'];
                ?>
                    <option value="<?php echo  $id_soft?>"><?php echo $nom_soft ?></option>  
                <?php
                }   
            ?>        
        </select>


        <input class="controls" type="text" id="Nom_Ver" name="registroVersion" placeholder="Numero de Vesion"class="input-48" required>


    <?php 
include_once './modelos/conexion2.php';
      ?>
     <body>  
     <div id="contact-form">      
      <label>Tipo de Software*</label>|| <a href="index.php?pagina=Tipo">Agregar nuevo tipo de Software</a></br>
      <select class="controls" type="text" id="Tip" name="registroTipo" placeholder="Seleccione Tipo de Licencia"class="input-48" required>
            <?php 
                $con=conexion();
                #Seleccionar Tipo de Licencia
                $sql='SELECT * FROM tipo';
                $query=mysqli_query($con,$sql);
                while($row=mysqli_fetch_array($query)){
                  $id_tip=$row['id' ];  
                  $nom_tip=$row['nom'];
                ?>
                    <option value="<?php echo  $id_tip?>"><?php echo $nom_tip ?></option>  
                <?php
                }   
            ?>        
        </select>
        

        <input class="controls" type="text" id="Nom_Ser" name="registroSerie" placeholder="Numero de Licencia"class="input-48" required>
       
      

     
      </br></br>
      <input class="buttons" type="submit" name="" value="Guardar">

      <?php

      $registro = ControladorLicencia::ctrRegistro();

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