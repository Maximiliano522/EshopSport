<?php

    include("conexion.php");
    $conn = conectar();
    $cod_estudiante = $_GET['id'];
    $sql = "DELETE FROM alumnos WHERE cod_estudiante='$cod_estudiante'";
    $query =mysqli_query($conn, $sql);
    if($query) {
        Header("Location: index.php");
    } 
?>