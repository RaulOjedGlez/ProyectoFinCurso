<?php
include "../src_php/logicaBuscar.php";
$mysqli = new mysqli("localhost","root","","registroalumnos");

if($mysqli->connect_error){
    echo" Error al conectar con la base de datos";
}else{
    $sql = "Select curso from alumno where cial = '{$_SESSION['cial']}'";
    $res = $mysqli->query($sql);
    $sql2 = "Select horario from cursos where nombre = '{$res}'"; 
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src_css/mostrarRegistro.css">

</head>
<body>
    
</body>
</html>
<?php
}
?>
