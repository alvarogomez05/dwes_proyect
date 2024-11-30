<?php
include "./funciones.php";

conectar();

//comprobar el recibimiento de la info del formulario

if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
}

if (isset($_POST['apellidos'])) {
    $apellidos = $_POST['apellidos'];
}

if (isset($_POST['escuderia'])) {
    $escuderia = $_POST['escuderia'];
}

if (isset($_POST['fabrica'])) {
    $fabrica = $_POST['fabrica'];
}

// comprobacion de los datos que se envian en el formulario
// echo $nombre . $apellidos . $escuderia . $fabrica;


//update en la bdd

try {
    $sql = "UPDATE piloto SET id_escuderia='$escuderia',id_fabrica='$fabrica' WHERE
nombre='$nombre' AND apellidos='$apellidos'";
    $filasModificadas = $pdo->exec($sql);
    // echo "Se han modificado $filasModificadas filas<br/>";
} catch (PDOException $excepcion) {
    echo "Error en la modificación de tipo " . $excepcion->getMessage();
}

// redireccionamos a la pagina de donde viene

header("location:./admin.php");
exit();
