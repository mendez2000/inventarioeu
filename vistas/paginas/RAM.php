
<link rel="stylesheet" href="./assets/css/style_RAM.css">
<div class="d-flex justify-content-center">
  <section class="form-login">
    <h5>Registro de Memoria RAM</h5>
    <form method="POST">




    
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
        


        <?php 
include_once './modelos/conexion2.php';
      ?>
     <body>  
     <div id="contact-form">      
      <label>Tipo de RAM*</label> || <a href="index.php?pagina=RAMTipo">Agregar nuevo tipo de RAM</a></br>
      <select class="controls" type="text" id="Nom_Tipo" name="registroTipo" placeholder="Seleccione una Marca"class="input-48" required>
            <?php 
                $con=conexion();
                #Seleccionar Tipo de RAM
                $sql='SELECT * FROM tram';
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
        



      <?php 
include_once './modelos/conexion2.php';
      ?>
     <body>  
     <div id="contact-form">      
      <label>Capacidad*</label></br>
      <select class="controls" type="text" id="Nom_Cap" name="registroCap" placeholder="Seleccione una Marca"class="input-48" required>
            <?php 
                $con=conexion();
                #Seleccionar Capacidad
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

        <input class="controls" type="text" id="Nom_Fre" name="registroFre" placeholder="Frecuencia"input-48" required>


      </br></br>
      <input class="buttons" type="submit" name="" value="Guardar">
      

      <?php
      $registro = ControladorRAM::ctrRegistro();

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