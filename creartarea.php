<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nuevo Producto</title>
  <link rel="stylesheet" href="estiloscrear.css">
</head>
    <style>
  body{
  font-family: Times New Roman, serif;
  background: #f3f4f6;
  display:flex;
  justify-content:center;
  align-items:center;
  height:100px;
}

.tra{
 background: #ffffff;
 padding:25px;
 border-radius:15px;
 width:320px;
 text-align:center;
 box-shadow: 0 10px 25px rgba(0,0,0,0.2);
 animation: fadeIn 0.8s ease-in-out;
}

input, select, button{
      width:100%;
      margin:10px 0;
      padding:10px;
      border-radius:8px;
      border:1px solid #ccc;
      outline:none;
      transition:0.3s;
      font-size:14px;
}

button{
  background:#4facfe;
  color:red;
}
  </style>
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
