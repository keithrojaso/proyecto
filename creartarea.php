<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nuevo Producto</title>
  <link rel="stylesheet" href="estiloscrear.css">
</head>
<body>

<div class="tra">
  <form action="registrotarea.php" method="post">
    
    <h2>Nueva Tarea</h2>

    <label>Ingrese:</label><br>
    <input type="number" placeholder="id" name="id" required><br>

    <input type="text" placeholder="Nombre" name="Nombre" required><br>

    <input type="text" placeholder="Descripcion" name="Descripcion" required><br>

    <label>Estado:</label><br>
    <select name="Estado">
      <option value="Proceso">Proceso</option>
      <option value="Terminado">Terminado</option>
      <option value="Retraso">Retraso</option>
    </select><br><br>

    <button type="submit">Registrar</button>

  </form>
</div>

</body>
</html>
