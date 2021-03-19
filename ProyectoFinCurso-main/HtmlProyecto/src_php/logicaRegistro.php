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
    
    if(isset($_GET["tipo"])){
        if($_GET["tipo"] == "entrada"){
            $sql ="insert into ".$_SESSION["cial"]."registro values('Entrada',' ',' ','{$_POST['fecha']}');";
            $sql2="insert into registro_diario values('Entrada',' ','{$_POST['fecha']}','{$_POST['hora']}','{$_SESSION['cial']}');";
    
            if(($res = $mysql->query($sql)) && ($res2 = $mysql->query($sql2)) ){
                echo "se ha registrado";
            }else{
                echo $mysql->error;
            }
        }else if($_GET["tipo"] == "salida"){
            $sql3 ="insert into ".$_SESSION["cial"]."registro values('Salida','{$_POST['motivo']}','{$_POST['persauto']}','{$_POST['fecha']}');";
            $sql4="insert into registro_diario values('Salida','{$_POST['motivo']}','{$_POST['fecha']}','{$_POST['hora']}','{$_SESSION['cial']}','{$_POST['persauto']}');";
    
            if(($res3 = $mysql->query($sql3)) && ($res4 = $mysql->query($sql4)) ){
                echo "se ha registrado";
            }else{
                echo $mysql->error;
            }
        }
        
    }
}


