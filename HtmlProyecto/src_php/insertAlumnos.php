<?php
$mysql = new mysqli("localhost","root","","registroalumnos"); 

if ($mysql->connect_error){
    echo"Error al conectar con la base de datos" . $mysql->connect_error;
}else{
    if(!isset($_POST["cial"],$_POST["dni"],$_POST["nombre"],$_POST["ap1"],
            $_POST["ap2"],$_POST["fechanac"],$_POST["curso"],$_POST["dir"],$_POST["persauto"])){
                
                echo "Error al recibir los datos"; 
            }else{
                $cial=$_POST["cial"];
                $dni = $_POST["dni"];
                $nombre= strtoupper($_POST["nombre"]);
                $ap1= strtoupper($_POST["ap1"]);
                $ap2= strtoupper($_POST["ap2"]) ;
                $fechanac= $_POST["fechanac"];
                $curso= $_POST["curso"];
                $dir=strtoupper($_POST["dir"]);
                $persauto= $_POST["persauto"];


                $sql ="insert into alumnos values (
                   '{$cial}','{$dni}','{$nombre}',
                   '{$ap1}','{$ap2}','{$curso}',
                   '{$fechanac}','{$dir}','{$persauto}' 
                )";

                $res = $mysql->query($sql);

                if(!$res){
                    echo "Error al insertar los datos en la base de datos";
                }else{
                    header("Location:insertAlumnos.html");
                }
            }
}

$mysql->close();
