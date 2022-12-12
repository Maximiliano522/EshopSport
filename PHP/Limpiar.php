<?php

    include("conexion.php");
        
    $conn = conectar();
    
    $sql = "DELETE FROM carrito";

    $query =mysqli_query($conn, $sql);
    if($query) {
        Header("Location: /index.html");
    } 