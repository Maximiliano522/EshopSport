<?php 
    $link = 'mysql:host=localhost:8889; dbname=eshop';
    $usuario = 'root';
    $pass = 'root';

    try{
        $pdo = new PDO($link, $usuario, $pass);
        //echo 'conectado';
    }catch (PDOexception $e){
        print "Error!!! " . $e->getMessage() . "<br/";
        die();
    }