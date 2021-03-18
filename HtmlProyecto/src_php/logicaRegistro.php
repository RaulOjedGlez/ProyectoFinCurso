<?php

if(isset($_GET["cial"])){
    session_start();
    $_SESSION["cial"] = $_GET["cial"];
    header("Location:directorio.html");
}

