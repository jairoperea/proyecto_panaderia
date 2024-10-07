<?php
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];
$stock = $_POST['stock'];
$carrito = $_POST['carrito'];

$host="localhost";
$user="root";
$pass="";
$basedatos="ishine";

$conn = mysqli_connect($host,$user,$pass,$basedatos);

$fileinfo = PATHINFO($_FILES['image']['name']);
$newfilename = $fileinfo['filename']."_".time().".".$fileinfo['extension'];
move_uploaded_file($_FILES['image']['tmp_name'],"../upload/".$newfilename);
$location = "upload/".$newfilename;

$insertar = "INSERT INTO pedidos (nombre, image, precio, descripcion, stock, carrito) values ('$nombre','$location',$precio,'$descripcion',$stock,$carrito)";

if(mysqli_query($conn,$insertar)){
    echo "Guardó";
}else{
    echo "error" . $insertar;
}
?>