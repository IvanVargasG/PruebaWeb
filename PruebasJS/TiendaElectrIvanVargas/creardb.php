<?php
    function conexion (){

        $server="localhost";
        $user="root";
        $pass="";             
        

        $con=mysqli_connect($server, $user, $pass);
            if(!$con){
                die ("Error al conectar la base de datos.".mysqli_connect_error());
            }
        
        $sql="CREATE DATABASE bdunad38";
            if(mysqli_query($con, $sql)){
                echo "La base de datos fue creada, satisfactoriamente.";
            }else{
                echo "Se presentaron errores al crear la base de datos" .mysqli_error($con);
            }
        mysqli_close();       
    }
?>