<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $bdname = "tareas";

    $conexion = new mysqli($servername, $username, $password, $bdname);

    if ($conexion->connect_error){
        die("Conexion fallida: ". $conexion->connect_error);
    }
    $id = $_GET['id'];
    $sql="SELECT * FROM Tareas WHERE id='$id'";

    $resultado = $conexion -> query($sql);
    if($resultado -> num_rows > 0){
        while($fila=$resultado->fetch_assoc()){
            echo $fila['id']." ".$fila["Nombre"]." ".$fila["Descripcion"]." ".$fila["Estado"];
            $id=$fila['id'];
        }
    }
?>