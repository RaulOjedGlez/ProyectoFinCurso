<?php 
session_start();
if(isset($_POST["usuario"], $_POST["contra"])){
    $_SESSION["usuario"] = $_POST["usuario"];

    echo "Hola " . $_SESSION["usuario"] . " a que alumno quieres buscar?";
}

?>