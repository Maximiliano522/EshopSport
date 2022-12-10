<?php

    $id = $_GET['id'];
    $color = $_GET['color'];
    $descripcion = $_GET['descripcion'];

    include_once 'conexion.php';

    $sql_editar = 'Update colores set color=?, descripcion=? where id=?';
    $sentencia_editar = $pdo->prepare($sql_editar);
    $sentencia_editar->execute(array($color,$descripcion,$id));

    $pdo = null;
    $sentencia_editar = null;

    header('location: index.php');