<?php
    include("conexion.php");

    $conn = conectar();

    $nombre = "Run Red";
    $precio = '200';

    $nombre2 = "Fight outfit";
    $precio2 = '350';

    $nombre3 = "Green Mood Man";
    $precio3 = '189';

    $sql = "INSERT INTO carrito VALUES(null, '$nombre', '$precio')";
    $sql2 = "INSERT INTO carrito VALUES(null, '$nombre2', '$precio2')";
    $sql3 = "INSERT INTO carrito VALUES(null, '$nombre3', '$precio3')";
    $query = mysqli_query($conn, $sql);
    $query = mysqli_query($conn, $sql2);
    $query = mysqli_query($conn, $sql3);

    if($query) {
        Header("Location: /indexLogin.php");
    } else{
        echo $query;
    }
?>