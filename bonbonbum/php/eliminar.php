<?php
    $id = $_POST['id']; 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "producto";

    $conm = mysqli_connect($host,$user,$pass,$db);
    $eliminar = "DELETE FROM producto WHERE id =".$id;
    if(mysqli_query($conm,$eliminar)){
        echo "Eliminar";
    }else{
        echo "error". $eliminar;
    }

    ?>
