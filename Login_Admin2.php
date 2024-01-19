
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pagina de Login Administrador </title>
    <link rel="stylesheet" href="./assets/css/Style_reg_user.css">

      <!--=================================
      Plugins de css
    =================================-->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
   <!--=================================
      Plugins de js
    =================================-->
<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Latest compiled Fontawesome -->
<script src="https://kit.fontawesome.com/99769324ae.js" crossorigin="anonymous"></script>


    
  </head>
  <body>
    <section class="form-login">
      <h5>Login Administrador</h5>
      <form action="/inventarioeu/validar/validar_Admin2.php" method="POST" onsubmit="return validar();">  
      

    		<div class="form-group">
			<label for="email">Correo electrónico:</label>
			 <div class="input-group">
			  <div class="input-group-prepend">
			    <span class="input-group-text">
			        <i class="fas fa-envelope"></i>
			    </span>
			  </div>
			 <input type="email" class="form-control" id="email" name="ingresoEmail" value="" placeholder="Ingrese su Email"class="input-48" required>
	        </div>
	        </div>



      <div class="form-group">
			<label for="pwd">Contraseña:</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-lock"></i>
					</span>
				</div>
				<input type="password" class="form-control" id="pwd" name="ingresoPassword" value="" placeholder="Ingrese su Contraseña"class="input-48" required>
			</div>
		</div>

    
 <br>



      <input class="buttons" type="submit" value="Ingresar">
      
      <p><a href="/inventarioeu/index.php">¿Regresar?</a></p>
    
     
    </section>
  </body>
</html>