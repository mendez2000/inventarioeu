
<link rel="stylesheet" href="./assets/css/style_DiscoInst.css">
<div class="d-flex justify-content-center">
  <section class="form-login">
    <h5>Registro de Tipo</h5>
    <form method="POST">
      <label>Tipos*</label></br>

      <input class="controls" type="text" id="Nom_Tip" name="Nom_Tip" placeholder="Nombre Tipo de Licencia"
        class="input-48" required>
      </br></br>
      <input class="buttons" type="submit" name="" value="Guardar">
      <p><a href="index.php?pagina=Licencia">Regresar</a></p>

      <?php

      $registro = ControladorTipo::ctrRegistro();

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