<?php
$servername = "localhost";
$username = "root";
$password = "";
$bdname = "tareas";

$conexion = new mysqli($servername, $username,$password,$bdname);

if($conexion -> connect_error){
    echo "Hubo un error";
}
$id = $_GET['id'];
$sql = "DELETE FROM tareas WHERE id = $id";
if ($conexion->query($sql) === TRUE) {
    echo "Tarea eliminada correctamente.";
}
 else {
    echo "Error: " . $conexion->error;
}
?>  