<link rel="stylesheet" href="./css/custom.css">
<form method="Post" action="./php/crear.php" enctype="multipart/form-data">
    <h2>ISHINE</h2>

    <label for="nombre">Nombre del producto: </label>    
    <input type="text" name="nombre">
    
    <label for="image">Carga tu archivo: </label>
    <input type="file" name="image" class="cargar-img"/>

    <label for="precio">Precio: </label>    
    <input type="int" name="precio">
    
    <label for="descripcion">Descripcion: </label>
    <input type="text" name="descripcion">
    
    <label for="stock">Stock: </label>
    <input type="int" name="stock">
    
    <label for="carrito">Carrito: </label>
    <input type="int" name="carrito">

    <label for="categoria">Categoria: </label>
    <input type="text" name="categoria">
    
    <input type="submit" name="enviar" value="enviar">
</form>