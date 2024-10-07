
<?php
    $email = $_POST["email"];
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "informacion";


    $conn = mysqli_connect($host,$user,$pass,$db);
    $sql = "INSERT INTO mail(email) values ('$email')";
    if(mysqli_query($conn,$sql)){
        echo "Se agrego el mail correctamente";
    }else{
        echo "error".$sql;
    }