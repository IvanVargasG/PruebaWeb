<?php include ('encabezado.php');?>

    <title>Bienvenido a Tienda Fox Electronics</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../estilo/estilo.css">
 
   
<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Bienvenido a Tienda Fox Electronics</h1>
				<p>Una aplicación de inicio de sesión, para la asignatura de diseño web, donde se usan las etiquetas HTML, Estilo css,
        Inicio de sesion y validación de datos con PHP con ayuda de Bootstrap.</p>		
			</div>
	</div>
	
	<div class="row">	
		<div class="col-sm-12 col-md-6 col-lg-6">
		
		<h3>Crea una cuenta</h3><hr />
		
		<form method="post" action="../sesion/crearcuenta.php" method="POST">
    <div class="form-group">				
				<input type="text" class="form-control" name="cedula" placeholder="Digite una cedula" required>			
		  </div>

			<div class="form-group">				
				<input type="text" class="form-control" name="nombre" placeholder="Digite un nombre" required>			
		  </div>

      <div class="form-group">				
				<input type="text" class="form-control" name="apellido" placeholder="Digite un apellido" required>			
		  </div>
		  
		  <div class="form-group">				
				<input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Digite un corre" required>
			</div>
		  
		  <div class="form-group">				
				<input type="password" class="form-control" name="password" placeholder="Crear Contraseña" required>
			</div>

      <div class="form-group">				
				<input type="text" class="form-control" name="telefono" placeholder="Crear telefono" required>
			</div>
		  
		  <button type="submit" class="btn btn-success btn-block">Crear mi cuenta</button>
		</form>		
		</div>		
		<div class="col-sm-12 col-md-6 col-lg-6">
			<h3>Iniciar sesión</h3><hr />
			<p>¿Ya tienes una cuenta? <a href="../sesion/login.php" title="Login Here">¡Entre aquí!</a></p>
		</div>
	</div>
</div>

<?php if(!empty($user)): ?>
      <br> Welcome. <?= $user['email']; ?>
      <br>You are Successfully Logged In
      <a href="logout.php">
        Logout
      </a>
    <?php else: ?>
    <div class="pagind">
      <h1>Por favor, inicia sesión o regístrate</h1>

      <a href="../sesion/login.php">Iniciar Sesión</a> or
      <a href="../sesion/registro.php">Registrate</a>
      </div>
    <?php endif; ?>


<div class="calculadora">
    <form action="#" name="calculadora" id="calculadora">
        <p id="textoPantalla">0</p>
        <p>
        <input type="button" class="largo" value="Retr" onclick="retro()" />
        <input type="button" class="largo" value="CE" onclick="borradorparcial()"/>
        <input type="button" class="largo" value="C" onclick="borradortotal()"/>
        </p>
        <p>
        <input type="button" value="7" onclick="numero ('7') "/>
        <input type="button" value="8" onclick="numero ('8')"/>
        <input type="button" value="9" onclick="numero ('9')"/>
        <input type="button" value="/"  onclick="operar ('/')"/>
        <input type="button" value="Raiz" onclick="raizc ()"/>
        </p>
        <p>
        <input type="button" value="4" onclick="numero ('4')"/>
        <input type="button" value="5" onclick="numero ('5')"/>
        <input type="button" value="6" onclick="numero ('6')"/>
        <input type="button" value="*" onclick="operar ('*')"/>
        <input type="button" value="%" onclick="porcentaje ()"/>
        </p>
        <p>
        <input type="button" value="1" onclick="numero ('1')"/>
        <input type="button" value="2" onclick="numero ('2')"/>
        <input type="button" value="3" onclick="numero ('3')"/>
        <input type="button" value="-" onclick="operar ('-')"/>
        <input type="button" value="1/x" onclick="inverso ()"/>
        </p>
        <p>
        <input type="button" value="0" onclick="numero ('0')"/>
        <input type="button" value="+/-" onclick="opuest ()"/>
        <input type="button" value="." onclick="numero ('.')"/>
        <input type="button" value="+" onclick="operar ('+')"/>
        <input type="button" value="=" onclick="igualar ()"/>
        </p>

        
    </form>

</div>


<?php include ('piepagina.php'); ?>