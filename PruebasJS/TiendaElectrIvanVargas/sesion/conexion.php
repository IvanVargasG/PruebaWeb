<?php
    function conexion (){

        $server="localhost";
        $user="root";
        $pass="";             
        $db="bdunad38";

        $con=mysqli_connect($server, $user, $pass, $db) or die ("Error al conectar la base de datos.".mysqli_error());
            
        
        return $con;        
    }
?>