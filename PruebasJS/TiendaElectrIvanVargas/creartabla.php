<?php
    function conexion (){

        $server="localhost";
        $user="root";
        $pass=""; 
        $db="bdunad38";            
        

        $con=mysqli_connect($server, $user, $pass, $db);
            if(!$con){
                die ("Error al conectar la base de datos.".mysqli_connect_error());
            }
        
        $sql="CREATE TABLE tabla(
            id INT (20) PRIMARY KEY,
            nombre VARCHAR (40),
            apellido VARCHAR (40),
            email VARCHAR (40),
            telefono VARCHAR (40),
            reg_date TIMESTAMP);

            if(mysqli_query($con, $sql)){
                echo "La tabla fue creada, satisfactoriamente.";
            }else{
                echo "Se presentaron errores al crear la tabla" .mysqli_error($con);
            }
        mysqli_close();       
    }
?>