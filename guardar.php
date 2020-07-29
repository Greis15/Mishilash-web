<?php

    $usuario = "root"; //en ste caso root por ser localhost
    $password = "";  //contraseña por si tiene algun servicio de hosting 
    $servidor = "localhost"; //localhost por lo del xampp
    $basededatos ="formulario"; //nombre de la base de datos


//por si hay errors de conexion un mensaje "Error con el servidor de la Base de datos".
$conexion = mysqli_connect  ($servidor,$usuario,"") or die ("Error con el servidor de la Base de datos"); 


//por si hay errors de conexion un mensaje "Error al conectarse a la Base de datos".
$db = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la Base de datos");


        //recuperar las variables
    $nombre=$_POST['nombre']; //name="nombre"
    $telefono=$_POST['telefono']; //name="correo"
    $correo=$_POST['correo']; //name="correo"
    $mensaje=$_POST['mensaje']; //name="mensaje"

    //sentencia sql
    $sql="INSERT INTO datos VALUES ('$nombre','$telefono,'$correo','$mensaje')"; 
    //manda a traer los valores de '$nombre','$telefono','$correo','$mensaje'
    
    //ejecutamos la centencia de sql
    $ejecutar=mysqli_query($conexion, $sql);


    //verificacion de la ejecucioon
    if(!$ejecutar){
        echo "Error mira en sql";
    }else{
        header("Location: index.html");
        // echo"Los datos fueron introducidos correctamente","<a href='index.html'>Volver</a>";
        }
     
?>