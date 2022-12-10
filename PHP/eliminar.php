<?php

include_once 'conexion.php';

$id = $_GET['id'];
$sql_eliminar = 'Delete From Colores Where id = ?';
$sentencia_eliminar = $pdo->prepare($sql_eliminar);
$sentencia_eliminar->execute(array($id));

$pdo = null;
$sentencia_eliminar = null;

header('location: index.php');