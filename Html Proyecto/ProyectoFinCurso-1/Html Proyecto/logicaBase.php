<?php
$mysql = new mysqli("localhost","root","","registroalumnos");
if($mysql->connect_error){
    echo "Error en la conexion con la base de datos ".$mysql->connect_error;

}else{
    
    // Crea las tablas de registro de todos alumnos por separado
    function createRegistroAl($mysql){

        $cial = getCial();

        while($row = $result->fetch_assoc()){
        createTables($mysql,$row["cial"]);
        }

    }

    // Devuelve el cial de todos los alumnos 
    function getCial($mysql){
        $sql ="select cial from alumnos";
        $result = $mysql->query($sql);
        return $result;
    }

    // funcion que crea las tablas 
    function createTables($mysql,$cial){
        $sql1 = "create table if not exists".$cial."registro";
        
        $result = $mysql->query($sql1);

        if(!$result){
                echo "Error al crear la tabla";
                break;
            }

        }

    
}