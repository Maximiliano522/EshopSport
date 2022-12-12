<?php

    include("conexion.php");
    $conn = conectar();
    $id = $_GET['id'];
    $sql = "DELETE FROM carrito WHERE idp='$id'";
    $query =mysqli_query($conn, $sql);
    if($query) {
        Header("Location: /indexLogin.php");
    } 
?>