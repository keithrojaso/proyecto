<?php
$servername = "localhost";
$username = "root";
$password = "";
$bdname = "tareas";

$conn = new mysqli($servername, $username, $password, $bdname);

if ($conn->connect_error){
    die("Conexion fallida: ". $conn->connect_error);
}


$id = $_POST['id'];
$Nombre = $_POST['Nombre'];
$Descripcion = $_POST['Descripcion'];
$Estado = $_POST['Estado'];
$sql = "INSERT INTO Tareas (id, Nombre, Descripcion, Estado)
VALUES ('$id','$Nombre','$Descripcion', '$Estado' )";

if($conn->query($sql) == TRUE){
    echo "Nueva tarea creada con exito.";
}
else{
    echo"Error: ".$sql. "<br>". $conn->error;
}

$conn->close();
?>
