<?php include ('../view/encabezado.php'); ?>

    <form action="eliminar.php" class="formulario" method="post">
        <h1 class="formulario_titulo">Inventario Fox Electronics</h1>
        <input type="text" class="formulario_input">
        <label for="" class="formulario_label">Nombre Producto</label>
        <input type="text" class="formulario_input" id="codigoprod">
        <label for="" class="formulario_label">Codigo Producto</label> 
        
        <input type="submit" class="formulario_submit" value ="Eliminar Producto" onclick="alert('Datos eliminados correctamente')";>
    </form>
    <script src="../javascript/formulario.js"></script>
    
<?php include ('../view/piepagina.php');?>
