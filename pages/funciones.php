<?php

function conectar()
{

    global $pdo;
    // conexión
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=motogp', 'admin', 'admin');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec('SET NAMES "utf8"');
        echo '<h4>Conexión establecida</h4>';
        return $pdo;
    } catch (PDOException $e) {
        echo 'Error en la conexión: ' . $e->getMessage();
        return null;
    }
}

function insertar()
{
    global $pdo;

    try {
        $filasInsertadas = $pdo->exec("INSERT INTO agenda
VALUES(NULL,'José','Sánchez','jose@gmail.com','11111111')");
        echo "Se han añadido $filasInsertadas filas<br />";
    } catch (PDOException $excepcion) {
        echo "Error en la inserción de tipo " . $excepcion->getMessage();
    }
}

function select()
{
    global $pdo;

    try {
        $sql = "SELECT * FROM usuario";
        $lista = $pdo->query($sql);
        echo "<h4>Lista de contactos</h4>";
        while ($contacto = $lista->fetch()) {
            echo "Nombre: " . $contacto['nombre'] . "<br>";
        }
    } catch (PDOException $excepcion) {
        echo "Error en la consulta de tipo " . $excepcion->getMessage();
    }
}

function update()
{

    global $pdo;

    // hacemos una modificación en los datos del contacto
    try {
        $sql = "UPDATE agenda SET emailContacto='jjjj@gmail.com' WHERE
emailContacto='jose@gmail.com'";
        $filasModificadas = $pdo->exec($sql);
        echo "Se han modificado $filasModificadas filas<br/>";
    } catch (PDOException $excepcion) {
        echo "Error en la modificación de tipo " . $excepcion->getMessage();
    }
}

function delete()
{
    global $pdo;

    try {
        $sql = "DELETE FROM agenda WHERE nombreContacto='Lucas'";
        $filasBorradas = $pdo->exec($sql);
        echo "Se han borrado $filasBorradas filas<br/>";
    } catch (PDOException $excepcion) {
        echo "Error en el borrado de tipo " . $excepcion->getMessage();
    }
}

?>