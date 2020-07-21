<?php include ('../view/encabezado.php'); ?>


    <form action="registrar.php" class="formulario" method="post">
        <h1 class="formulario_titulo">Inventario Fox Electronics</h1>
              
       
        <input type="text" class="formulario_input" name="codigoprod">
        <label for="" class="formulario_label">Codigo Producto</label> 
        <input type="text" class="formulario_input" name="nombreprod">
        <label for="" class="formulario_label">Nombre Producto</label>
        <input type="text" class="formulario_input" name="marcaprod">
        <label for="" class="formulario_label">Marca Producto</label>
        <input type="text" class="formulario_input" name="precioprod">
        <label for="" class="formulario_label">Precio Unitario Producto</label>
        <input type="text" class="formulario_input" name="cantidadprod">
        <label for="" class="formulario_label">Cantidad Producto</label>
        <input type="submit" class="formulario_submit" value ="Guardar Producto">
    </form>
    

<?php include ('../view/piepagina.php');?>

