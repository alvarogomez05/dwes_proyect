<?php

include "./funciones.php";

//conectamos la bdd
conectar();

//hacemos la consulta
try {
    $sql = "SELECT * FROM piloto";
    $lista = $pdo->query($sql);
    // Definición correcta de la tabla
    echo "<table><thead><tr><th>Nombre</th><th>Apellido</th><th>Edad</th><th>Puntos</th></tr></thead><tbody>";

    // Recorriendo la lista de pilotos
    while ($piloto = $lista->fetch()) {
        echo "<tr>
                <td>" . htmlspecialchars($piloto['nombre']) . "</td>
                <td>" . htmlspecialchars($piloto['apellidos']) . "</td>
                <td>" . htmlspecialchars($piloto['edad']) . "</td>
                <td>" . htmlspecialchars($piloto['puntos']) . "</td>
              </tr>";
    }

    echo "</tbody></table>";
} catch (PDOException $excepcion) {
    echo "Error en la consulta de tipo: " . $excepcion->getMessage();
}
