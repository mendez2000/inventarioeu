
<link rel="stylesheet" href="./assets/css/style_HDD.css">
<div class="d-flex justify-content-center">
  <section class="form-login">
    <h5>Registro de Alamacenamientos</h5>
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
    <input type="text" class="form-control" id="Nom_Mod" name="registroModelo" placeholder="Ingrese Modelo"class="input-48" required>
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


        <?php 
include_once './modelos/conexion2.php';
      ?>
     <body>  
     <div id="contact-form">      
      <label>Tipo*</label> || <a href="index.php?pagina=TipoDisco">Agregar nuevo Tipo</a></br>
      <select class="controls" type="text" id="nom_tdisco" name="registroTdisco" placeholder="Seleccione Tipo de Alamacenamiento"class="input-48" required>
            <?php 
                $con=conexion();
                #Seleccionar Tipo de Disco
                $sql='SELECT * FROM Tdisco';
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
      <select class="controls" type="text" id="nom_cap" name="registroCap" placeholder="Seleccione Capacidad de Almacenamiento"class="input-48" required>
            <?php 
                $con=conexion();
                #Seleccionar capacidad de Alamacenamiento
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


     
        <?php 
include_once './modelos/conexion2.php';
      ?>
     <body>  
     <div id="contact-form">      
      <label>Funcionamiento*</label> || <a href="index.php?pagina=DiscoInst">Agregar nuevo Funcionamiento</a></br>
      <select class="controls" type="text" id="nom_Inst" name="registroInst" placeholder="Seleccione Instalacion de Alamacenamiento"class="input-48" required>
            <?php 
                $con=conexion();
                #Seleccionar tipo de instalacion de Alamacenamiento
                $sql='SELECT * FROM DiscoInst';
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

      $registro = ControladorHDD::ctrRegistro();

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