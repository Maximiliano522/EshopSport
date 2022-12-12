<?php

    session_start();


    include_once 'conexionU.php';

    //echo 'Funcionando';
    
    $usuario_login = $_POST['login_usuario'];
    $contrasena_login = $_POST['login_contrasena'];

    // Verificar que existe el usuario
    $sql = 'Select * from usuarios where Nombre=?';
    $sentencia = $pdo->prepare($sql);
    $sentencia->execute(array($usuario_login));
    $resultado = $sentencia->fetch();
    
    if(!$resultado){
        header('Location: registro.php');
    }

    if(password_verify($contrasena_login, $resultado['contrasena'])){
        $_SESSION['admin'] = $usuario_login;
        header('Location: /indexLogin.php');
    }else{
        echo 'Contraseña Incorrecta';
        header('Location: registro.php');
    } 
?>