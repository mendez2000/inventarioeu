

<link rel="stylesheet" href="./assets/css/style_edi.css">
<div class="d-flex justify-content-center">
  <section class="form-login">
    <h5>Registro de Ciudad</h5>
    <form method="POST">
      <label>Datos de la Ciudad*</label></br>

      <input class="controls" type="text" id="Nom_Ciudad" name="Nom_Ciudad" placeholder="Nombre de la Ciudad"
        class="input-48" required>
      </br></br>
      <input class="buttons" type="submit" name="" value="Guardar">

      <?php

      $registro = ControladorCiudad::ctrRegistro();

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