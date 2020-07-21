<?php
    include ('../conexion.php');
        $con=conexion();
        
            if($_POST){//si se presiona el boton enviar
                $codigo=$_POST['codigoprod'];
                $nombre=$_POST['nombreprod'];
                $marca=$_POST['marcaprod'];
                $preciou=$_POST['precioprod'];
                $cantidad=$_POST['cantidadprod'];

                    $insertar= "DELETE FROM producto WHERE id_producto=$codigo" or die(mysqlsi_error());

                    $resultado= mysqli_query($con, $insertar)
                    or die ("Error al eliminado los datos");

                    mysqli_close($con);
                    
                echo "Se ha eliminado el producto, correctamente.";

            } 
        ?>