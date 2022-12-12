<?php
    session_start();

    include("conexion.php");

    $conn =conectar();
    $id = $_GET['id'];
    $sql = "SELECT * FROM usuarios WHERE nombre='$id'";
    $query = mysqli_query($conn, $sql);
    $usuario = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto PHP - Update</title>
</head>
<body>
    <div class="container">
        <div class="row">
                <h1 class="text-center">    Editar Nombre</h1>
        </div>
        <form action="update.php" method="post">
            <input type="text" name="id" value="<?php echo $usuario['id']?>" hidden>
            <input type="text" name="nombre" class="form-control" value="<?php echo $usuario['nombre']?>" placeholder="Escribe tu nombre">
            <input type="submit" value="Actualizar" class="btn btn-primary btn-block">
            <button class="btn" @onclick="location.redirect('./indexLogin.php')">
                Regresar
            </button>
        </form>
    </div>
</body>
</html>