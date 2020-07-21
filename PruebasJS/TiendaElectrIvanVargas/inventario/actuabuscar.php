<?php
include ('../view/encabezado.php');
    include ('../conexion.php');
        $con=conexion();

        if (!$con) {
            die("La conexión falló: " . mysqli_connect_error());
        }  
        

        $consulprod = "SELECT * FROM producto WHERE nombre_producto = '$_POST[producto]' AND id_producto = '$_POST[codigoprod]' ";

        // Variable $result hold the connection data and the query
        $resultado = mysqli_query($con, $consulprod);
    
        while($rows=mysqli_fetch_array($resultado)) {        
        
        if($_POST){//si se presiona el boton enviar
            $codigo=$rows[0];
            $nombre=$rows[1];
            $marca=$rows[2];
            $preciou=$rows[3];
            $cantidad=$rows[4];
    }
   
                   
                    
}            
       ?>
       <form action="actualizar.php" class="formulario" method="post">
    <h1 class="formulario_titulo">Inventario Fox Electronics</h1>
          
   
    <input type="text" class="formulario_input" name="codigoprod" value="<?php echo $codigo; ?>">
    <label for=""  class="formulario_label"> </label> 
    <input type="text" class="formulario_input" name="nombreprod" value="<?php echo $nombre; ?>">
    <label for="" class="formulario_label">  </label>
    <input type="text" class="formulario_input" name="marcaprod" value="<?php echo $marca; ?>">
    <label for="" class="formulario_label">  </label>
    <input type="text" class="formulario_input" name="precioprod" value="<?php echo $preciou; ?>">
    <label for="" class="formulario_label">  </label>
    <input type="text" class="formulario_input" name="cantidadprod" value="<?php echo $cantidad; ?>">
    <label for="" class="formulario_label"> </label>
    <input type="submit" class="formulario_submit" value ="Modificar Producto">
</form>
    
        