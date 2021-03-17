<?php

function buscar($mysqli){

    $sql =" select * from alumnos where nombre = '{$_GET['alumno']}'";
    $res=$mysqli->query($sql);
        return $res;
}




//busca en la base de datos los alumnos con el mismo nombre
//y los muestra en una tabla
function showAlumnos($res,$mysqli){

    while($row= $res->fetch_assoc()){
        echo"
                    <tr>
                        <td>". $row["nombre"]."</td>
                        <td>".$row["apellido1"]."</td>
                        <td>".$row["apellido2"]."</td>
                        <td>".$row["dni"]."</td>
                    </tr>";
    }

}

