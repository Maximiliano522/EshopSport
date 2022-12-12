<?php

    session_start();

    include("conexion.php");

    $conn = conectar();

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];

    $sql = "UPDATE usuarios SET nombre='$nombre' WHERE id='$id'";
    $query = mysqli_query($conn, $sql);

    if($query) {
        $_SESSION['admin'] = $nombre;
        Header("Location: /indexLogin.php");
    } else {
        echo $query;
    }
?>