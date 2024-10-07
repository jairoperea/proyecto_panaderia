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
    $conn = mysqli_connect($host,$user,$pass,$db);

    $actualizar="UPDATE parqueadero1 SET receptor = '$receptor', placa = '$placa', hora_entrada='$hora_entrada', hora_salida='$hora_salida', valor_pagar='$valor_pagar'  WHERE id =$id";

    if(mysqli_query($conn,$actualizar)){
        echo "ACTUALIZO";
    }else{
        echo "error" . $actualizar;
    }
    ?>