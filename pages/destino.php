
<?php
//iniciamos la sesion
session_start();

include "./funciones.php";

//conectamos la bdd
conectar();
//comprobamos que nos envian datos con el formulario  

if (isset($_POST['nombre'])) {
    $usuario = $_POST['nombre'];
}

//introducimos el nombre del usuario en el array session

$_SESSION['user'] = $usuario;

if (isset($_POST['password'])) {
    $password = $_POST['password'];
}

//comprobarAcceso
try {
    $sql = "SELECT * FROM usuario";
    $lista = $pdo->query($sql);
    echo "<h4>Lista de contactos</h4>";
    while ($user = $lista->fetch()) {
        if ($user['rol'] === "A") {
            //comparamos la info del formulario si es igual se trara de admin
            if ($user['nombre'] === $usuario && $user['contrasena'] === $password) {
                //redireccionar a las funciones del admin
                header("location: ./admin.php");
                exit();
            }
        } else {
            //no es admin
            if ($user['nombre'] === $usuario && $user['contrasena'] === $password) {
                //redireccionar a las funciones del usuario registrado
                header("location: ./user.php");
                exit();
            }
        }
    }
    $_SESSION['error'] = "usuario y/o contraseña incorrectas";
    header("location: ../index.php");
    exit();
} catch (PDOException $excepcion) {
    echo "Error en la consulta de tipo " . $excepcion->getMessage();
}



?>