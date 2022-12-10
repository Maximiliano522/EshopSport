<?php

    include("conexion.php");

    // Verificamos si hay sesion de usuario
    if(isset($_SESSION['admin'])){
    }else{
        header('Location: registro.php');
    }

    $conn = conectar();
    $sql = "SELECT * FROM usuarios";
    $query = mysqli_query($conn, $sql);
    //echo $query;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <h1 class="text-center">Proyecto CRUD</h1>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h1>Ingresa los Datos del Alumno</h1>
                <form action="insertar.php" method="post">
                    <input type="text" name="ine" class="form-control mb-3" placeholder="Escribe tu ine">
                    <input type="text" name="nombre" class="form-control mb-3" placeholder="Escribe tu nombre">
                    <input type="text" name="apellidos" class="form-control mb-3" placeholder="Escribe tus Apeliidos">
                    <input type="submit" value="Insertar" class="btn btn-primary">
                </form>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <h3 class="text-center">Alumnos del Sistema</h3>
                </div>
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>Código</th>
                            <th>Ine</th>
                            <th>Nombre (s)</th>
                            <th>Apellidos</th>
                            <th>
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row=mysqli_fetch_array($query)){
                        ?>
                            <tr>
                                <td>
                                    <?php echo $row['cod_estudiante'] ?>
                                </td>
                                <td>
                                    <?php echo $row['ine'] ?>
                                </td>
                                <td>
                                    <?php echo $row['nombre'] ?>
                                </td>
                                <td>
                                    <?php echo $row['apellidos'] ?>
                                </td>
                                <td>
                                    <a href="actualizar.php?id=<?php echo $row['cod_estudiante']?>" 
                                        class="btn btn-warning">Editar</a>
                                    |
                                    <a href="delete.php?id=<?php echo $row['cod_estudiante']?>" 
                                        class="btn btn-danger">Borrar</a>
                                </td>
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
