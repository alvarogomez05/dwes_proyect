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

if (isset($_POST['rol'])) {
    $rol = $_POST['rol'];
    //prueba de rol
    if ($rol !== 'A' && $rol !== 'R') {
        //ponemos el valor predeterminado
        $rol = 'R';
    }
}

try {
    $filasInsertadas = $pdo->exec("INSERT INTO usuario
    VALUES(   '$usuario'  ,  '$password' ,  '$rol'  );");
} catch (PDOException $excepcion) {
    echo "Error en la inserción de tipo " . $excepcion->getMessage();
}
