<?php
$mysql = new mysqli("localhost","root","","registroalumnos"); 

if ($mysql->connect_error){
    echo"Error al conectar con la base de datos" . $mysql->connect_error;
}else{
    if(!isset($_POST["dni"],$_POST["nombre"],$_POST["ap1"],
            $_POST["ap2"],$_POST["asig"])){
                
                echo "Error al recibir los datos"; 
            }else{
                $dni = $_POST["dni"];
                $nombre= strtoupper($_POST["nombre"]);
                $ap1= strtoupper($_POST["ap1"]);
                $ap2= strtoupper($_POST["ap2"]) ;
                $asig=strtoupper($_POST["asig"]);


                $sql ="insert into alumnos values (
                   '{$dni}','{$nombre}',
                   '{$ap1}','{$ap2}','{$asig}' 
                )";

                $res = $mysql->query($sql);

                if(!$res){
                    echo "Error al insertar los datos en la base de datos";
                }else{
                    header("Location:insertProfes.html");
                }
            }
}

$mysql->close();
