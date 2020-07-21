    <?php include ('../view/encabezado.php'); ?>
        <form action="" class="formulario">
            <h1 class="formulario_titulo">Inventario Fox Electronics</h1>
            <input type="text" class="formulario_input">
            <label for="" class="formulario_label">Nombre Producto</label>
            
        
            <input type="text" class="formulario_input" id="numero1">
            <label for="" class="formulario_label">Cantidad Producto</label> 
            <input type="text" class="formulario_input" id="numero2">
            <label for="" class="formulario_label">Valor Unitarios</label>
            <input type="text" class="formulario_input" id="numero3">
            <label for="" class="formulario_label">Valor IVA</label>
            <input type="text" class="formulario_input" id="numero4">
            <label for="" class="formulario_label">Costo Producto</label>
            <input type="submit" class="formulario_submit" value="Total compra" 
            onclick="alert('Total de la compra $' + multiplicacion() +  '     IVA de la compra $' + iva() + 
            '     Porcentaje utilidad ' + utilidad() + '%')";>
        </form>
    <script src="../javascript/formulario.js"></script>
    
    <?php include ('../view/piepagina.php');?>
