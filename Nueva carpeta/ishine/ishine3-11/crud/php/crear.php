<?php
    $receptor=$_POST['receptor'];
    $placa=$_POST['placa'];
    $hora_entrada=$_POST['hora_entrada'];
    $hora_salida=$_POST['hora_salida'];
    $valor_pagar=$_POST['valor_pagar'];


    $host="localhost";
    $user="root";
    $pass="";
    $db="parqueadero";
    $conn=mysqli_connect($host,$user,$pass,$db);

    $SQL="INSERT INTO parqueadero1(receptor,placa,hora_entrada,hora_salida,valor_pagar) values ('$receptor','$placa','$hora_entrada','$hora_salida','$valor_pagar')";
    if (mysqli_query($conn,$SQL)){
        echo "guardo con exito";
    }else{
        echo "error". $SQL;
    }
?>