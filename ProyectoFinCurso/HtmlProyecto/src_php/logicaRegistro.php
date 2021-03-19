<?php
include '../src_php/conectar.php';
//conectamos con la base de datos
$mysql = conectar();

session_start();
if(!isset($_SESSION["cial"])){
    if(isset($_GET["cial"])){      
        $_SESSION["cial"] = $_GET["cial"];
        header("Location:../src_html/directorio.html");
    }
}else{
    if(isset($_GET["entrada"])){
        $sql ="insert into ".$_SESSION["cial"]."registro values('{}','{}','{}','{}');";
        $sql2="insert into registro_diario values('{}','{}','{}','{}','{}');";
    }
}


