<?php
    $id=$_POST['id'];
    $receptor=$_POST['receptor'];
    $placa=$_POST['placa'];
    $hora_entrada=$_POST['hora_entrada'];
    $hora_salida=$_POST['hora_salida'];
    $valor_pagar=$_POST['valor_pagar'];

    $host="localhost";
    $user="root";
    $pass="";
    $db="parqueadero";
    $conn = mysqli_connect($host, $user, $pass, $db);

    $DELETE = "DELETE FROM parqueadero1 WHERE id=".$id;

    if(mysqli_query($conn,$DELETE)){
        echo "Elimino";
    }else{
        echo "error" . $DELETE;
    }
?>