<?php
$id = $_POST['id'];
$nombre = $_POST['nombre']; 
$descripcion = $_POST['descripcion'];
$presio = $_POST['presio'];
$categoria = $_POST['categoria'];

$host = "localhost";
$user = "root";
$pass = "";
$db = "producto";

$conm = mysqli_connect($host, $user, $pass, $db);

if (!$conm) {
    die("Error en la conexión: " . mysqli_connect_error());
}

$actualizar = "UPDATE producto SET receptor = '$receptor', nombre = '$nombre', descripcion = '$descripcion', presio = '$presio', categoria = '$categoria' WHERE id = $id";

if (mysqli_query($conm, $actualizar)) {
    echo "Registro actualizado correctamente";
} else {
    echo "Error al actualizar el registro: " . mysqli_error($conm);
}

mysqli_close($conm);
?>