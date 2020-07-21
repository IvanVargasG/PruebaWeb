
<div class="container">

	<?php

    include '../conexion.php';
    include '../view/encabezado.php';

	$con=conexion();

	// Check connection
	if (!$con) {
		die("La conexión falló: " . mysqli_connect_error());
    }
   
    
	
	// Query to check if the email already exist
	$checkEmail = "SELECT * FROM usuario WHERE email = '$_POST[email]' ";

	// Variable $result hold the connection data and the query
	$result = $con-> query($checkEmail);

	// Variable $count hold the result of the query
	$count = mysqli_num_rows($result);

	// If count == 1 that means the email is already on the database
	if ($count == 1) {
	echo "<div class='alert alert-warning mt-4' role='alert'>
					<p>Ese correo electrónico ya está en nuestra base de datos.</p>
					<p><a href='../sesion/login.php'>Por favor ingrese aquí</a></p>
				</div>";
	} else {	
	
	/*
	If the email don't exist, the data from the form is sended to the
	database and the account is created
	*/
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
	$email = $_POST['email'];
    $password = $_POST['password'];
	$telefono = $_POST['telefono'];
	
	$password=md5($password);
	
	// Query to send Name, Email and Password hash to the database
	$query = "INSERT INTO usuario (cedula, nombre, apellido, email, password, telefono) VALUES ('$cedula', '$nombre', '$apellido', '$email', '$password', '$telefono')";

	if (mysqli_query($con, $query)) {
		echo "<div class='alert alert-success mt-4' role='alert'><h3>Tu cuenta ha sido creada.</h3>
		<a class='btn btn-outline-primary' href='login.php' role='button'>Iniciar sesión</a></div>";		
		} else {
			echo "Error: " . $query . "<br>" . mysqli_error($con);
		}	
	}	
	mysqli_close($con);
	?>
</div>