

<link rel="stylesheet" href="./assets/css/style_DiscoInst.css">
<div class="d-flex justify-content-center">
  <section class="form-login">
    <h5>Registro de Instalacion</h5>
    <form method="POST">
      <label>Datos*</label></br>

      <input class="controls" type="text" id="Nom_DiscoInst" name="Nom_DiscoInst" placeholder="Ingrese: Interno / Externo"
        class="input-48" required>
      </br></br>
      <input class="buttons" type="submit" name="" value="Guardar">
      <p><a href="index.php?pagina=HDD">regresar</a></p>

      <?php

      $registro = ControladorDiscoInst::ctrRegistro();

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