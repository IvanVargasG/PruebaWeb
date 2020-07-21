<?php include ('../view/encabezado.php');?>

    <form action="" class="formulario">
        <h1 class="formulario_titulo">Inventario Fox Electronics</h1>
        <input type="text" class="formulario_input">
        <label for="" class="formulario_label">Nombre Producto</label>
        
       
        <input type="text" class="formulario_input" id="codigoprod">
        <label for="" class="formulario_label">Codigo Producto</label> 
        <input type="text" class="formulario_input" id="nombreprod">
        <label for="" class="formulario_label">Valor Venta</label>
        <input type="text" class="formulario_input" id="marcaprod">
        <label for="" class="formulario_label">Cantidad Producto</label>
        
        <input type="submit" class="formulario_submit" value ="Venta" onclick="alert('Datos guardados correctamente')";>
    </form>

<?php include ('../view/piepagina.php');?>