<?php include ('../view/encabezado.php'); ?>

<form action="actuabuscar.php" class="formulario" method="post">
        <h1 class="formulario_titulo">Inventario Fox Electronics</h1>
        <input type="text" class="formulario_input" name="producto">
        <label for="" class="formulario_label">Nombre Producto</label>
        <input type="text" class="formulario_input" name="codigoprod">
        <label for="" class="formulario_label">Codigo Producto</label> 
        
        <input type="submit" class="formulario_submit" value ="Consultar Producto">
    </form>

    
    <script src="../javascript/formulario.js"></script>
    
<?php include ('../view/piepagina.php');?>
