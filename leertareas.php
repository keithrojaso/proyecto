<?php
$servername  = "localhost";
$username = "root";
$password = "";
$bdname = "tareas";

$conn = new mysqli($servername, $username, $password, $bdname);

if($conn->connect_error){
    die("Conexion fallida: ".$conn->connect_error);
}

$sql = "SELECT * FROM tareas";
$resultado = $conn->query($sql);

echo "<table border=2 class='tabla-estilo'>";
echo "<tr><td>id</td><td>Nombre</td><td>Descripcion</td><td>Estado</td><td>Acciones</td></tr>";

if ($resultado->num_rows > 0){
    while($fila = $resultado->fetch_assoc()){
        $id = $fila['id'];
        echo "<tr>";
        echo "<td>".$fila['id']."</td>";
        echo "<td>".$fila['Nombre']."</td>";
        echo "<td>".$fila['Descripcion']."</td>";
        echo "<td>".$fila['Estado']."</td>";
        echo "<td>
                <a href='actualizartarea.php?id=$id'><button>Editar</button></a>
                <a href='eliminartarea.php?id=$id'><button>Eliminar</button></a>
                <a href='mostrartarea.php?id=$id'><button>Mostrar</button></a>
              </td>";
        echo "</tr>";
    }
}

echo "</table>";

$conn->close();
?>

<a href="creartarea.php"><button>Nueva tarea</button></a>
