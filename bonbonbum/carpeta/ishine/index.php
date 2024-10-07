<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ishine</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    
    <script src="./js/index.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="./css/custom.css">

</head>
<body>
    <header>
        <div class="row">
            <div class="col-md-3">
                <img src="./img/logo-ishine.svg" class="logo img-fluid">
            </div>
            <div class="col-md-9 list">
                <ul>
                    <li>
                        <a>About us</a>
                    </li>
                    <li>
                        <a>Services</a>
                    </li>
                    <li>
                        <a>Shop</a>
                    </li>
                    <li>
                        <a>Book appoinment</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <section class="filtrar">
        <div class="row">
            <div class="col-md-12 filtr">
                <form method="Post">
                    <select name="filtro">
                        <option>id</option>
                        <option>nombre</option>
                        <option>descripcion</option>
                        <option>precio</option>
                        <option>categoria</option>
                    </select>
                    <input type="text" name="termino">
                    <input type="submit" value="filtrar" name="filtrar">
                </form>
            </div>
        </div>
    </section>

    <section class="producto">
        <div class="row">
            <?php
                $host="localhost";
                $user="root";
                $pass="";
                $basedatos="ishine";

                $conn = mysqli_connect($host,$user,$pass,$basedatos);
                
                if(ISSET($_POST['filtrar'])){
                    $termino=$_POST['termino'];
                    if($_POST['filtro']=="id"){
                        $sql = "SELECT * FROM pedidos WHERE id=".$termino;
                    }elseif($_POST['filtro']=="nombre"){
                        $sql = "SELECT * FROM pedidos WHERE nombre like'".$termino."%'";
                    }elseif($_POST['filtro']=="descripcion"){
                        $sql = "SELECT * FROM pedidos WHERE descripcion like'".$termino."%'";
                    }elseif($_POST['filtro']=="precio"){
                        $sql = "SELECT * FROM pedidos WHERE precio like'".$termino."%'";
                    }elseif($_POST['filtro']=="categoria"){
                        $sql = "SELECT * FROM pedidos WHERE categoria like'".$termino."%'";
                    }
                }else{
                    $sql="SELECT * FROM pedidos";
                }
                $query = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_array($query)){
            ?>
            <div class="col-md-2 campos">
                <div class="imagenes">
                    <img class="pr" src="<?php echo $row['image'] ?>">
                    <span>SALE</span>
                </div>
                <div class="textos">
                    <h4 class="titulo_producto"><?php echo $row['nombre'] ?></h4>
                    <span class="descuento"><s><?php echo $row['precio'] ?></s><b><?php echo $row['precio'] ?></b></span>
                    <a class="agregar_carrito" href="/ishine/producto.php?id=<?php echo $row['id'] ?>" id="boton_carrito">Add to car</a>
                </div>
            </div>
            <?php
            }
            ?>   
        </div>
    </section>
    
    <footer class="foter">
        <div class="row">
            <div class="col-md-4 locations">
                <h2>Locations</h2>
                <ul>
                    <li>
                        Hollywood
                    </li>
                    <li>
                        2205b Hollywood Blv,Hollywood
                    </li>
                    <li>
                        FL 33020
                    </li>
                    <li>
                        Call us: 320 213 2255
                    </li>
                </ul>
            </div>
            <div class="col-md-4 services">
                <ul>
                    <img src="./img/estrella.png" alt="asterisco">
                    <li>
                        <a>About us</a>
                    </li>
                    <li>
                        <a>Services</a>
                    </li>
                    <li>
                        <a>Shop</a>
                    </li>
                    <li>
                        <a>Book appoinment</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 insta">
                <ul>
                    <li>
                    <i class="bi bi-instagram"></i><a>   @ishineclinics</a>
                    </li>
                    <li>
                    <i class="bi bi-instagram"></i><a>   @ishineclinics</a>
                    </li>
                    <li>
                    <i class="bi bi-instagram"></i><a>   @ishineclinics</a>
                    </li>
                    <li>
                    <i class="bi bi-instagram"></i><a>   @ishineclinics</a>
                    </li>
                    <li>
                    <i class="bi bi-instagram"></i><a>   @ishineclinics</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>