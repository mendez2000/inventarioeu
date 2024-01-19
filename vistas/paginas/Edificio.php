
<link rel="stylesheet" href="./assets/css/style_edi.css">
<div class="d-flex justify-content-center">
  <section class="form-login">
    <h5>Registro de Edificio</h5>
    <form method="POST">
      <label>Datos del Edificio</label></br>

      <input class="controls" type="text" id="Nom_Edif" name="Nom_Edif" placeholder="Nombre del Edificio"
        class="input-48" required>
      </br></br>
      <input class="buttons" type="submit" name="" value="Guardar">

      <?php

      $registro = ControladorEdificio::ctrRegistro();

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