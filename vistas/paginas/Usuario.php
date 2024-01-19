


<link rel="stylesheet" href="./assets/css/style_user.css">
<div class="d-flex justify-content-center">
  <section class="form-login">
  <h5 class="text-center py-2">Registro de Usuario</h5>
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
                #Seleccionar Rol
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
        <input type="email" class="form-control" id="email" name="registroEmail">
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
      <input type="password" class="form-control" id="pass" name="registroPassword">
      </div>        
      </div>
      
   
     <div id="contact-form">      
      <label>Roles*</label>  || <a href="formularios.php?pagina=Roles">Agregar nuevo Rol de usuario</a></br>
      <select class="controls" type="text" id="rol" name="registroRoles" placeholder="Seleccione rol"class="input-48" required>
            <?php 
                $con=conexion();
                #Seleccionar Rol
                $sql='SELECT * FROM rol';
                $query=mysqli_query($con,$sql);
                while($row=mysqli_fetch_array($query)){
                  $id_rol=$row['id' ];  
                  $nom_rol=$row['nom_rol'];
                ?>
                    <option value="<?php echo  $id_rol?>"><?php echo $nom_rol ?></option> 
                <?php
                }   
            ?>        
        </select>         
      </br></br>
      <input class="buttons" type="submit" name="" value="Guardar">
      <?php
      $registro = ControladorUsuario::ctrRegistro();
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