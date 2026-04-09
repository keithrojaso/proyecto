<?php
$servername  = "localhost";
$username = "root";
$password = "";
$bdname = "tareas";
$conn = new mysqli ($servername, $username, $password, $bdname);
if($conn -> connect_error){
    die ("Conexion fallida:".$conn->connect_error);
}
$id=$_GET['id'];
$sql="SELECT * FROM tareas WHERE id='$id'";
$resultado=$conn->query($sql);
    if($resultado->num_rows > 0){
        while($fila=$resultado->fetch_assoc()){
            $Nombre=$fila['Nombre'];
            $Descripcion=$fila['Descripcion'];
            $Estado=$fila['Estado'];
           
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="estilosupdate.css">

</head>
<body>
    
    <form action="registroeditar.php" method="post">
        <h2>Actualizar tarea:</h2>
        <label for="">ID de la tarea:</label>
        <input type="text" name='id' value='<?=$id?>'> <br>
        <label for="">Nombre de la tarea:</label>
        <input type="text" name='Nombre' value='<?=$Nombre?>'> <br>
        <label for="">Descripción de la tarea:</label>
        <input type="text" name='Descripcion' value='<?=$Descripcion?>'> <br>
        <label for="">Estado de la tarea:</label>
        <input type="text" name='Estado' value='<?=$Estado?>'> <br>
        <input type ="Submit">
</form>
</body>
</html>