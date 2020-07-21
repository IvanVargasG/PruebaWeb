<?php
include ('../view/encabezado.php');
    include ('../conexion.php');
        include ('actuabuscar.php');
        $con=conexion();

        if (!$con) {
            die("La conexión falló: " . mysqli_connect_error());
        }  
        if($_POST){//si se presiona el boton enviar
            $codigo=$_POST['codigoprod'];
            $nombre=$_POST['nombreprod'];
            $marca=$_POST['marcaprod'];
            $preciou=$_POST['precioprod'];
            $cantidad=$_POST['cantidadprod'];

        $insertar= "UPDATE producto SET nombre_producto='$nombre', marca_producto='$marca', precio_producto_uni='$preciou', cantidad_producto='$cantidad' WHERE id_producto=$codigo" or die(mysqlsi_error());

        $resultado= mysqli_query($con, $insertar)
        or die ("Error al actualizar los datos");

        mysqli_close($con);

        echo "Se ha actualizado el producto, correctamente.";           
        }                
                      
        ?>
        
