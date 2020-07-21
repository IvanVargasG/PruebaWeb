<?php
session_start();
?>

<div class="container">

<?php


	include '../conexion.php';
	include '../view/encabezado.php';
	
	
	$con=conexion();
	
			
			
			// Check connection
			if (!$con) {
				die("La conexión falló: " . mysqli_connect_error());
			}
			
			$email = $_POST['email']; 
			$password = $_POST['password'];
					
			// Query sent to database
			$result = mysqli_query($con, "SELECT email, password, cedula FROM usuario WHERE email = '$email'");
			
			// Variable $row hold the result of the query
			$row = mysqli_fetch_assoc($result);
			
			// Variable $hash hold the password hash on database
			$hash = $row['password'];           
            /* 
			password_Verify() function verify if the password entered by the user
			match the password hash on the database. If everything is OK the session
			is created for one minute. Change 1 on $_SESSION[start] to 5 for a 5 minutes session.
			*/			
			if (password_verify($_POST['password'], $hash)) {	
				
				$_SESSION['loggedin'] = true;
				$_SESSION['cedula'] = $row['cedula'];
				$_SESSION['start'] = time();
				$_SESSION['expire'] = $_SESSION['start'] + (1 * 60) ;						
				
				echo "<div class='alert alert-success mt-4' role='alert'><strong>Â¡Bienvenido!</strong> $row[cedula]			
				<p><a href='edit-profile.php'>Edit Profile</a></p>	
				<p><a href='logout.php'>Logout</a></p></div>";
			
			} else {
				echo "<div class='alert alert-danger mt-4' role='alert'>Correo electrÃ³nico o contraseÃ±a son incorrectos!
				<p><a href='../sesion/login.php'><strong>Â¡IntÃ©ntalo de nuevo!</strong></a></p></div>";			
			}
			
			?>

			
		</div>