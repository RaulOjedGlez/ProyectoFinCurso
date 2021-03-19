<?php

function conectar(){
    $mysqli = new mysqli("localhost","root","","registroalumnos"); 

    if($mysqli->connect_error){
        
        die("Error al conectar con la base de datos".$mysqli->connect_error); 

    }
    return $mysqli; 
    
}