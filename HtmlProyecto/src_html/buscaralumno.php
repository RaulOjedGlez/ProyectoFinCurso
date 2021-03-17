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
        <title>Buscar alumno </title>
        <link rel="stylesheet" href="../src_css/registroSalidas.css">
        <script type="text/javascript">
            $(function() {
                $('button').click(function() {
                    $.get('../src_php/buscarAlumno.php');
                });
            });
        </script>

    </head>

    <body>
    <h1>Buscame esta ^^</h1>
    <div id="container1">
        <form method="get" action="" class="form">
            <h1>Buscar alumno</h1>
            <label for="alumno">Nombre:</label>
            <input type="text" id="alumno" name="alumno">

            <button type="submit" id="buscar">Buscar alumno</button>
        </form>
    </div>



    <?php
    if(isset($_GET["alumno"])){
    ?>

    <div id="container2">
        
            <?php
            $res = buscar($mysqli);
            if(mysqli_num_rows($res) > 0){
                ?>
                <table>
            <thead>
            <tr>
                <th>Nombre</th>
                <th colspan="2" >apellidos</th>
                <th>Dni</th>
            </tr>
            </thead>
            <tbody>
                <?php
                showAlumnos($res,$mysqli);
                ?>
            </tbody>
            </table>
                <?php
            }else{
                echo"No hay alumnos con ese nombre";
            }
            ?>

        <?php

        }
        ?>
    </div>


    </html>



    <?php
}


