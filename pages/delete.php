<?php

include "./funciones.php";

conectar();

//comprobar el id_piloto de la url

if (isset($_GET['id_piloto'])) {
    $id = $_GET['id_piloto'];
}


echo 'borrar';
// borrar de la base de datos
try {
    $sql = "DELETE FROM piloto WHERE id_piloto=$id";
    $filasBorradas = $pdo->exec($sql);
    // echo "Se han borrado $filasBorradas filas<br/>";
} catch (PDOException $excepcion) {
    echo "Error en el borrado de tipo " . $excepcion->getMessage();
}

//una vez borrado redireccionamos

header("location:./admin.php");
