<?php
    include ('../view/encabezado.php');
    include ('../conexion.php');
        $con=conexion();
        
            if($_POST){//si se presiona el boton enviar
                $codigo=$_POST['codigoprod'];
                $nombre=$_POST['nombreprod'];
                $marca=$_POST['marcaprod'];
                $preciou=$_POST['precioprod'];
                $cantidad=$_POST['cantidadprod'];

                    $insertar= "INSERT INTO producto (id_producto, nombre_producto, marca_producto, precio_producto_uni, cantidad_producto) VALUES ('$codigo', '$nombre', '$marca', '$preciou', '$cantidad')" or die(mysqlsi_error());

                    $resultado= mysqli_query($con, $insertar)
                    or die ("Error al insertar los datos");

                    mysqli_close($con);
                    
                        echo "<h1>Se ha registrado el producto, correctamente.</h1>";

            } 
            include ('../view/piepagina.php')                     
        ?>

<form action="inventarioguar.php" class="formulario" method="post">
        <table class="tabla">
        <td>
        <h1 class="formulario_titulo">Inventario Fox Electronics</h1>
        </td>    
       
        <tr>
        <td><?php echo $codigo ?></td>
        </tr>
        <tr>      
        <td><?php echo $nombre ?></td>
        </tr>
        <tr>        
        <td><?php echo $marca ?></td>
        </tr>
        <tr>
        <td><?php echo $preciou ?></td>
        </tr>
        <tr>
        <td><?php echo $cantidad ?></td>
        </tr>
        <tr>
        <td><input type="submit" class="formulario_submit" value ="Volver Registro producto"></td>
        </tr>
    </table>
</form>