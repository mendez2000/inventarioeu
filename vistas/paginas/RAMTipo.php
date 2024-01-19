
<link rel="stylesheet" href="./assets/css/style_Tram.css">
<div class="d-flex justify-content-center">
  <section class="form-login">
    <h5>Registro Tipo de RAM</h5>
    <form method="POST">
      <label>Datos*</label></br>

      <input class="controls" type="text" id="Nom_Tram" name="registroTram" placeholder="Nombre Tipo de RAM"class="input-48" required>
      </br></br>
      <input class="buttons" type="submit" name="" value="Guardar">
      <p><a href="index.php?pagina=RAM">Regresar</a></p>

      <?php

      $registro = ControladorTram::ctrRegistro();

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