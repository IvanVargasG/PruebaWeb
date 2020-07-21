<?php include ('../view/encabezado.php'); ?>

<form action="" class="formulario">
        <h1 class="formulario_titulo">Inventario Fox Electronics</h1>
             
                   
        <input type="submit" class="formulario_submit" onclick = "this.form.action = '../inventario/inventarioguar.php'"  value ="Nuevo Producto"><br>
        <input type="submit" class="formulario_submit" onclick = "this.form.action = '../inventario/inventarioact.php'" value ="Modificar Producto"><br>
        <input type="submit" class="formulario_submit" onclick = "this.form.action = '../inventario/inventarioelim.php'" value ="Eliminar Producto"><br>
        <input type="submit" class="formulario_submit" onclick = "this.form.action = '../inventario/inventariocons.php'" value ="Consultar Producto"><br>
        
    </form>

    <?php include ('../view/piepagina.php');?>