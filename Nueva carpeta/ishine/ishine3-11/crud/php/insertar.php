<?php
$receptor = $_POST['receptor'];
$placa = $_POST['placa'];
$entrada = $_POST['entrada'];

$host="localhost";
$user="root";
$pass="";
$basedatos="parqueadero";
$conn = mysqli_connect($host,$user,$pass,$db);

$insertar = "INSERT INTO parqueadero1 (receptor,placa,hora_entrada,hora_salida,valor_pagar) values ('$receptor','$placa','$entrada')";

if(mysqli_query($conn,$insertar)){
    echo "Inserto";
}else{
    echo "error" . $insertar;
}
?>