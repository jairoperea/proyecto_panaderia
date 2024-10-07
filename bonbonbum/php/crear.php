<?php

if (isset($_POST['Enviar'])) {

	$nombre=$_POST['nombre'];
	$producto=$_POST['producto'];
	$cantidad=$_POST['cantidad'];
	$precio=$_POST['precio'];
	$descripcion=$_POST['descripcion'];



	$host="localhost";
	$user="root";
	$pass="";
	$db="producto";
	$conn=mysqli_connect($host,$user,$pass,$db);

	print_r($_FILES);

	$fileinfo=pathinfo($_FILES['imagen']['name']);
	$newfilename=$fileinfo['filename']."_". time().".". $fileinfo['extension'];
	move_uploaded_file($_FILES['imagen']['tmp_name'],"../upload/".$newfilename);
	$location="./upload/".$newfilename;

	$sql="INSERT INTO producto (nombre,producto,cantidad,precio,descripcion,imagen)values('$nombre','$producto','$cantidad','$precio','$descripcion','$location')";  

	if(mysqli_query($conn,$sql)){
	    echo "Guardado con exito";
	}else{
	    echo "error ".$sql ;
	}
}

?>