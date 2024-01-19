
<link rel="stylesheet" href="./assets/css/style_DiscoInst.css">
<div class="d-flex justify-content-center">
  <section class="form-login">
    <h5>Registro Tipos de Almacenamientos</h5>
    <form method="POST">
      <label>Datos*</label></br>

      <input class="controls" type="text" id="Nom_Tdisco" name="registroTdisco" placeholder="Clasificacion de Alamcenamiento "class="input-48" required>
      </br></br>
      <input class="buttons" type="submit" name="" value="Guardar">
      <p><a href="index.php?pagina=HDD">Regresar</a></p>

      <?php

      $registro = ControladorTipoDisco::ctrRegistro();

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