<?php
  if(isset($_GET['id'])) {
    $id_rol = $_GET['id'];
    $rol = ControladorRoles::ctrObtenerRol($id_rol);
  }
?>

<div class="d-flex justify-content-center">
  <section class="form-login">
    <h5>Edición de Roles</h5>
    <form method="POST">
      <label>Datos de Roles*</label></br>
      <input class="controls" type="text" id="Nom_Roles" name="Nom_Roles" placeholder="Nombre del Rol"
        class="input-48" required value="<?php echo $rol['nom_rol'] ?>">
      </br></br>
      <input class="buttons" type="submit" name="" value="Guardar">
      <p><a href="index.php?pagina=Usuario">Regresar</a></p>
    </form>
  </section>
</div>