<?php

session_start();

include "./funciones.php";

conectar();


if (isset($_POST['nuevacontraseña'])) {
    $newpass = $_POST['nuevacontraseña'];
}

if (isset($_POST['nuevacontraseña2'])) {
    $newpass2 = $_POST['nuevacontraseña2'];
}

//guardamos el nombre

$nombre = $_SESSION['user'];

//si las contraseñas no coinciden
if ($newpass !== $newpass2) {
    //guardamos el error en el array de session para mostrarselo al cliente
    $_SESSION['errcambiopasswd'] = "Las contraseñas no coinciden, no se realizará el cambio";
} else {
    // se hace el update en la bdd
    // hacemos una modificación en los datos del usuario
    try {
        $sql = "UPDATE usuario SET contrasena='$newpass' WHERE
            nombre='$nombre'";

        $filasModificadas = $pdo->exec($sql);
        echo "Se han modificado $filasModificadas filas<br/>";
    } catch (PDOException $excepcion) {
        echo "Error en la modificación de tipo " . $excepcion->getMessage();
    }
}

// redireccionamos a la pagina de donde vienen
header("location:./admin.php");
exit();
