<?php
    include ('../view/encabezado.php');
    include ('../conexion.php');
    $con=conexion();
    
	// Check connection
	if (!$con) {
		die("La conexión falló: " . mysqli_connect_error());
    }  
    
	
	// Query to check if the email already exist
	$consulprod = "SELECT * FROM producto WHERE nombre_producto = '$_POST[producto]' AND id_producto = '$_POST[codigoprod]' ";

	// Variable $result hold the connection data and the query
	$resultado = mysqli_query($con, $consulprod);

	while($rows=mysqli_fetch_array($resultado)) {
    
    echo "<form action='inventariocons.php' class='formulario' method='post'>";
    
    echo "<table class='tabla' border='1'>";
    echo "<tr> <td>"."<h1> Datos del producto colsultado</h1>"."<tr> <td>";
    echo "<tr> <td>"."Codigo:  ".$rows[0]."<tr> <td>";
    echo "<tr> <td>"."Nombre:  "."$rows[1]."."<tr> <td>";
    echo "<tr> <td>"."Marca:  "."$rows[2]."."<tr> <td>";
    echo "<tr> <td>"."Precio Unitario:  "."$rows[3]."."<tr> <td>";
    echo "<tr> <td>"."Cantidad:  "."$rows[4]."."<tr> <td>";
    
    echo "<tr>
        <td><input type='submit' class='formulario_submit' value ='Volver consulta producto'></td>
    </tr>";
    echo "</table>";
    echo "</form>";
    
    

	}
        
    
                   
                    mysqli_close($con);
                    
       ?>
