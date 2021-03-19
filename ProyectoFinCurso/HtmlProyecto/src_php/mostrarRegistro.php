<?php
include "../src_php/logicaBuscar.php";
$mysqli = new mysqli("localhost","root","","registroalumnos");

if($mysqli->connect_error){
    echo" Error al conectar con la base de datos";
}else{
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
    <div id="container1">
       
                <table>
            <thead>
            <tr>
                <th>Tipo</th>
                <th colspan="2">Fecha y Hora</th>
                <th>Motivo</th>
                <th>Persona Autorizada</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Salida</td>
                <td colspan="2">00-00-0000 00:00</td>
                <td>Enfermedad</td>
                <td>Su puta madre</td>
            </tr>
            <tr>
                <td>Entrada</td>
                <td colspan="2">00-00-0000 00:00</td>
                <td>se quedo sobao paco</td>
                <td>El mismo porque es el puto</td>
            </tr>
            </tbody>
            </table>
            
        </div>
   
</body>
</html>
<?php
}
?>
