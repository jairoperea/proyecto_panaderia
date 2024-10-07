<form method="post" action="/ejercicios/crud/php/crear.php">
    <input type="text" name="receptor">
    <input type="text" name="placa">
    <input type="text" name="entrada">
    <input type="submit" name="enviar" value="enviar">
</form>
<table>
    <tr>
        <td>id</td>
        <td>receptor</td>
        <td>placa</td>
        <td>hora_entrada</td>
        <td>hora_salida</td>
        <td>valor_pagar</td>
    </tr>
    <?php
    $host="localhost";
    $user="root";
    $pass="";
    $basedatos="parqueadero";
    $conn = mysqli_connect($host,$user,$pass,$db);

    $sql="SELECT * FROM parqueadero1";

    $query=mysqli_query($conn,$sql);

    while($row=mysqli_fetch_array($query)){
    ?>

    <tr class="sdfds">
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['receptor'];?></td>
        <td><?php echo $row['placa'];?></td>
        <td><?php echo $row['hora_entrada'];?></td>
        <td><?php echo $row['hora_salida'];?></td>
        <td><?php echo $row['valor_pagar'];?></td>
    </tr>

    <?php
    }
    ?>    
</table>



<!-- crear.php -->
<?php
//1. Capturar datos necesarios para mi sentencia
$receptor = $_POST['receptor'];
$placa = $_POST['placa'];
$entrada = $_POST['entrada'];

//2. Conectarme a la base de datos
$host="localhost";
$user="root";
$pass="";
$basedatos="parqueadero";
$conn = mysqli_connect($host,$user,$pass,$db);

$insertar = "INSERT INTO parqueadero1 (receptor,placa,hora_entrada,hora_salida,valor_pagar) values ('$receptor','$placa','$entrada')";

if(mysqli_query($conn,$insertar)){
    echo "Guardó";
}else{
    echo "error" . $insertar;
}
?>

<?php
$id = $_POST['id'];
$receptor = $_POST['receptor'];
$placa = $_POST['placa'];
$entrada = $_POST['entrada'];

$host="localhost";
$user="root";
$pass="";
$basedatos="parqueadero";
$conn = mysqli_connect($host,$user,$pass,$db);

$actualizar = "UPDATE parqueadero1 SET receptor = '$receptor', placa = '$placa' WHERE id = $id";

if(mysqli_query($conn,$actualizar)){
    echo "Guardó";
}else{
    echo "error" . $insertar;
}

<script src="./js/custom.js"></script>
<script>
jQuery(document).ready(function(){
    $(".tabla tr").click(function() {
        $(".id").val($(this).find("td").eq(0).html());
        $(".receptor").val($(this).find("td").eq(1).html());
    }); 
});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
jQuery(document).ready(function(){
    $(".tabla tr").click(function() {
        alert("hola mundo")
    }); 
});
</script>