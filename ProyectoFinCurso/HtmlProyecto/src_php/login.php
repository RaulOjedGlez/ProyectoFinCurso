<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src_css/login.css">
</head>
<body>
<div id="error">
    <?php
    session_start();
    $mysqli = new mysqli('127.0.0.1', 'root', '', 'registroalumnos');
    if(!$mysqli){
        echo "<h2> Error al conectarse con la base de datos <h2>";
    }else{
        if(isset($_POST["usuario"], $_POST["contra"])){
            $sql = "select * from usuarios where nombre = '{$_POST['usuario']}'";
            $result = $mysqli->query($sql);

            /*
                $us = $result->fetch_row();

                if($us[0]!= $_POST["usuario"])
            */

            if(mysqli_num_rows($result) > 0) {
                $sql2 = "select pass from usuarios where nombre = '{$_POST['usuario']}'";
                $result2 = $mysqli->query($sql2);
                $pass = $result2->fetch_assoc();

                if($pass["pass"] == $_POST["contra"]){

                    $_SESSION['usuario'] = $_POST['usuario'];
                    header('location: ../src_html/buscaralumno.php');

                }else{

                    echo "<h2>La contraseña que has introducido es incorrecta </h2><br>";
                    echo "<h2><a href='../src_html/index.html'>Volver al log in</a></h2>";
                }
            }else{

                echo "<h2> No se encuentra el usuario en la base </h2><br>";
                echo "<h2><a href='../src_html/index.html'>Volver al log in</a> </h2>";
            }

        }
    }
    ?>
</div>
</body>
</html>