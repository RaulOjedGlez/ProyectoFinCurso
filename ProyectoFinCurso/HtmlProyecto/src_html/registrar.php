<?php
session_start();
include '../src_php/conectar.php';
//conectamos con la base de datos
$mysql = conectar();


$sql = "select * from persautos where alumno = '{$_SESSION['cial']}'";
$res = $mysql->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src_css/registrar.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">

function cambiar(sel) {

    let divs = document.getElementsByClassName("bloque");

      if (sel.value=="entrada"){
           divs[0] .style.display = "block";
           divs[1].style.display = "none";

      }else if(sel.value=="salida"){
            divs[1] .style.display="block";
            divs[0].style.display = "none";
      }else{
          
            divs[0].style.display = "none";
            divs[1].style.display = "none";
      }
}
     
    
</script>
</head>

<body>
    <div>
        <p> Registrar Entrada o Salida</p>
        <select id="tipo" onChange="cambiar(this);">
            <option value="Elegir" id="elegir" selected>Elegir...</option>
            <option value="entrada" id="entrada">Entrada</option>
            <option value="salida" id="salida">Salida</option>      
        </select>
    </div>
    <div class="bloque">
        <form action="../src.php/logicaRegistro.php?tipo=entrada" method="post">
            <label for="fecha">Fecha y Hora de entrada</label>
            <input type="date" id="fecha" name="fecha">
            <input type="time" id="hora" name="hora" value="08:00">
            <br><br>
            <button type="submit">Enviar</button>
       
        </form>
    </div>
    <div class="bloque">
        <form action="../src.php/logicaRegistro.php?tipo=salida" method="post">
            <label for="fecha">Fecha y Hora de entrada</label>
            <input type="date" id="fecha" name="fecha">
            <input type="time" id="hora" name="hora" value="08:00">
            <br><br>
            <label for="motivo">Motivo</label>
            <select>
                <option>motivo</option>
                <option value="medico">medico</option>
                <option value="injustificada">injustificada</option>
                <option value="muertexd">sa matao paco</option>
            </select>
            <br><br>
            <label for="persauto">Persona Autorizada</label>
            <select>
                <option selected> Elegir </option>
                <?php
                    while($row = $res->fetch_assoc()){

                        echo "<option value='{$row['dni']}'>{$row['nombre']} {$row['dni']}</option>";
                    }
                ?>
            </select>
             <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>
