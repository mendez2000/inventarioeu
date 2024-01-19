

<link rel="stylesheet" href="./assets/css/style_Software.css">
<div class="d-flex justify-content-center">
  <section class="form-login">
    <h5>Registro de Software</h5>
    <form method="POST">
      <label>Datos del Software*</label></br>

      <input class="controls" type="text" id="Nom_Sof" name="Nom_Sof" placeholder="Nombre del Software"
        class="input-48" required>
      </br></br>
      <input class="buttons" type="submit" name="" value="Guardar">

      <?php
   
      $registro = ControladorSoftware::ctrRegistro();
  
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


