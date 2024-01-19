


<link rel="stylesheet" href="./assets/css/Style_Admin1.css">
<div class="d-flex justify-content-center">
  <section class="form-login">
  <h5 class="text-center py-2">Registro de Administrador</h5>
    <form method="POST">
<?php 
include_once './modelos/conexion2.php';
      ?>
     <body>  

     <div id="contact-form">      
     <label for="nombre">Nombre:</label></br>  
            <select class="controls" type="text" id="empl" name="registroEmpleado" placeholder="Seleccione Empleado"class="input-48" required>
     
            <?php 
                $con=conexion();
                #Seleccionar Empleado
                $sql='SELECT * FROM emp';
                $query=mysqli_query($con,$sql);
                while($row=mysqli_fetch_array($query)){
                  $id_emp=$row['id' ];  
                  $nom_emp=$row['nom'];
                  $ape_emp=$row['ape'];
                ?>
                    <option value="<?php echo  $id_emp?>"><?php echo $nom_emp. '  ' .$ape_emp ?></option>  

                 
                <?php
                }   
            ?>        
        </select>   

        <div class="form-group">
        <label for="email">Correo Electronico:</label>
        <div class="input-group">
        <div class="input-group-prepend">
      <span class="input-group-text">
        <i class="fas fa-envelope"></i>
      </span>
      </div>
        <input type="email" class="form-control" id="Nom_email" name="registroEmail">
      </div>
      </div>
     
      <div class="form-group">
        <label for="pwd">Contraseña:</label>
        <div class="input-group">
        <div class="input-group-prepend">
      <span class="input-group-text">
      <i class="fas fa-lock"></i>
      </span>
      </div>
      <input type="password" class="form-control" id="Nom_pass" name="registroPassword">
      </div>        
      </div>
      
   
    
      </br>
      <input class="buttons" type="submit" name="" value="Guardar">
      <p><a href="/inventarioeu/index.php">¿Regresar?</a></p>
    
      <?php
      $registro = ControladorAdmin1::ctrRegistro();
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