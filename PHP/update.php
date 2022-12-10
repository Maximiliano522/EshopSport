<?php

    include("conexion.php");
    $conn = conectar();
    $cod_estudiante = $_POST['cod_estudiante'];
    $ine = $_POST['ine'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];

    $sql = "UPDATE alumnos SET ine='$ine', nombre='$nombre', apellidos='$apellidos' WHERE cod_estudiante='$cod_estudiante'";
    $query = mysqli_query($conn, $sql);
    if($query) {
        Header("Location: index.php");
    } else {
        echo $query;
    }
?>