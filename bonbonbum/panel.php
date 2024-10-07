<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/costumpanel.css">
</head>
<body>
    
    <form action="./php/crear.php" method="post" enctype="multipart/form-data">
       

        <label for="imagen">Imagen:</label>
        <input type="file" name="imagen" id="imagen" required><br><br>
        
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required><br><br>
        
        <label for="producto">Producto:</label>
        <input type="text" name="producto" id="producto" required><br><br>
        
        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" id="cantidad" required><br><br>
        
        <label for="precio">Precio:</label>
        <input type="number" step="0.001" name="precio" id="precio" required><br><br>
        
        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" id="descripcion" required></textarea><br><br>
        
        <input type="submit" name="Actualizar" value="Actualizar">
        

        <input type="submit" name="Eliminar" value="Eliminar">
        
        
        <input type="submit" name="Enviar" value="Enviar">
    </form> 
</body>
</html>