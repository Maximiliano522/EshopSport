<?php
    
    session_start();
    
    include_once 'conexionU.php';

    $usuario_nuevo = $_POST['nombre_usuario'];
    $contrasena = $_POST['contrasena'];
    $contrasena2 = $_POST['contrasena2'];

    $contrasena = password_hash($contrasena, PASSWORD_DEFAULT);

    //echo $contrasena;

    // Verificar que existe el usuario
    $sql = 'Select * From usuarios Where Nombre=?';
    $sentencia =$pdo->prepare($sql);
    $sentencia->execute(array($usuario_nuevo));
    $resultado = $sentencia->fetch();

    if($resultado){
        echo 'El usuario ya existe';
        die();
    }else{
        if(password_verify($contrasena2,$contrasena)){
        
            $sql_agregar = 'Insert Into Usuarios(nombre, contrasena) values(?,?)';
            $sentencia_agregar = $pdo->prepare($sql_agregar);
            $sentencia_agregar->execute(array($usuario_nuevo, $contrasena));
    
            // Destruir las variables de conexion
            $sentencia_agregar = null;
            $pdo = null;
            $_SESSION['admin'] = $usuario_nuevo;
            header('location: /indexLogin.php');
    
        }else{
            echo 'Las contraseñas no son iguales';
        }
    }

    
