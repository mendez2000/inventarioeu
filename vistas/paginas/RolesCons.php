<link rel="stylesheet" href="./assets/css/ConsMonitor.css">
<style>
table {
  border-collapse: collapse;
  width: 100%;
  margin-bottom: 1rem;
}

table th, table td {
  padding: 0.75rem;
  vertical-align: top;
  text-align: left;
  border-top: 1px solid #dee2e6;
}

table th {
  background-color: #343a40;
  color: #fff;
}

table tbody tr:nth-child(even) {
  background-color: #f2f2f2;
}

table tbody tr:hover {
  background-color: #d4d4d4;
}

table tbody td:last-child {
  white-space: nowrap;
}

.btn {
  display: inline-block;
  font-weight: 400;
  color: #212529;
  text-align: center;
  vertical-align: middle;
  user-select: none;
  background-color: #fff;
  border: 1px solid #ced4da;
  padding: 0.375rem 0.75rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.25rem;
}

.btn-danger {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}

.btn-danger:hover {
  color: #fff;
  background-color: #c82333;
  border-color: #bd2130;
}

</style>
<div class="search-container">
  <input type="text" placeholder="Buscar por nombre de rol" id="search-input">
  <button type="button" id="search-btn">Buscar</button>
</div>



<script>
  document.getElementById("search-btn").addEventListener("click", function() {
    // Obtener el valor de búsqueda
    var searchValue = document.getElementById("search-input").value.toLowerCase();

    // Obtener todas las filas de la tabla
    var rows = document.querySelectorAll("table tbody tr");

    // Iterar sobre cada fila y ocultar o mostrar según corresponda
    for (var i = 0; i < rows.length; i++) {
      var row = rows[i];
      var name = row.querySelector("td:nth-child(2)").textContent.toLowerCase();

      if (name.includes(searchValue)) {
        row.style.display = "";
      } else {
        row.style.display = "none";
      }
    }
  });
</script>

<link rel="stylesheet" href="./assets/css/style_roles.css">

<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nombre del Rol</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
      include_once './modelos/conexion2.php';
      $con = conexion();
      $sql = 'SELECT * FROM rol';
      $query = mysqli_query($con, $sql);
      while($row = mysqli_fetch_array($query)) {
        $id_rol = $row['id'];
        $nom_rol = $row['nom_rol'];
    ?>
    <tr data-id="<?php echo $nom_rol ?>">
    <tr>
  <td><?php echo $id_rol ?></td>
  <td><?php echo $nom_rol ?></td>
  <td>
        <button class="btn btn-primary editar-rol">Editar</button>
        <button class="btn btn-danger eliminar-rol" data-toggle="modal" data-target="#eliminarRolModal">Eliminar</button>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>

<!-- Formulario para editar rol -->
<div class="d-flex justify-content-center">
  <section class="form-login">
    <h5>Editar Rol</h5>
    <form method="POST">
      <label>Datos de Roles*</label></br>
      <input type="hidden" name="id" id="id">
      <input class="controls" type="text" id="Nom_Rol" name="Nom_Rol" placeholder="Nombre del Rol"
        class="input-48" required>
      </br></br>
      <input class="buttons" type="submit" name="editarRol" value="Guardar">
      <p><a href="index.php?pagina=Usuario">Regresar</a></p>
    </form>
  </section>
</div>







<div id="modal-eliminar" class="modal">
  <div class="modal-contenido">
    <h2>¿Está seguro que desea eliminar este registro?</h2>
    <p>Esta acción no se puede deshacer.</p>
    <div class="modal-botones">
      <button id="btn-eliminar-confirmar">Eliminar</button>
      <button id="btn-eliminar-cancelar">Cancelar</button>
    </div>
  </div>
</div>



<script>
  // Al hacer clic en el botón editar
  $(".editar-rol").click(function() {
    // Obtener el ID del rol de la fila correspondiente
    var idRol = $(this).closest("tr").data("id");

    // Cargar los datos del rol en el formulario
    $("#id_rol").val(idRol);
    $("#Nom_Roles").val($(this).closest("tr").find("td:eq(1)").text());
  });
</script>
<script>
  const btnsEliminar = document.querySelectorAll('.btn-eliminar');
  const modalEliminar = document.getElementById('modal-eliminar');
  const btnEliminarConfirmar = document.getElementById('btn-eliminar-confirmar');
  const btnEliminarCancelar = document.getElementById('btn-eliminar-cancelar');

  btnsEliminar.forEach(btnEliminar => {
    btnEliminar.addEventListener('click', () => {
      const id = btnEliminar.getAttribute('data-id');
      modalEliminar.classList.add('mostrar');
      
      btnEliminarConfirmar.addEventListener('click', () => {
        eliminarRegistro(id);
        modalEliminar.classList.remove('mostrar');
      });

      btnEliminarCancelar.addEventListener('click', () => {
        modalEliminar.classList.remove('mostrar');
      });
    });
  });

  function eliminarRegistro(id) {
    // enviar petición al servidor para eliminar el registro con el ID especificado
  }
</script>
