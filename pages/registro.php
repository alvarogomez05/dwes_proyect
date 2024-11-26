<?php

//iniciamos la sesion
session_start();

include "./funciones.php";

//conectamos la bdd
conectar();
//comprobamos que nos envian datos con el formulario  

if (isset($_POST['nombreRegistro'])) {
    $usuario = $_POST['nombreRegistro'];
}

if (isset($_POST['passwordRegistro'])) {
    $password = $_POST['passwordRegistro'];
}

$rol = 'R';


try {
    $filasInsertadas = $pdo->exec("INSERT INTO usuario
    VALUES(   '$usuario'  ,  '$password' ,  '$rol'  );");
    header("location:../index.php");
} catch (PDOException $excepcion) {
    echo "Error en la inserción de tipo " . $excepcion->getMessage();
}
