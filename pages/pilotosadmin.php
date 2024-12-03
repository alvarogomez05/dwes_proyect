<?php




try {
    $sql = "SELECT * FROM piloto";
    $lista = $pdo->query($sql);

    // Estilos CSS para la tabla
    echo "<style>
        table {
            width: 70%;
            border-collapse: collapse;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* sombra de la tabla */
            margin: 3rem auto;
        }
        th, td {
            border: 1px solid black; /* Bordes negros */
            padding: 8px;
            text-align: left;
        }
        thead {
            background-color: red; /* Fondo rojo para el encabezado */
            color: white; /* Color blanco para el texto del encabezado */
        }
        tbody tr:nth-child(even) {
            background-color: #f2f2f2; /* Fondo gris claro para filas pares */
        }
        tbody tr:hover {
            background-color: #ddd; /* Fondo gris más oscuro cuando se pasa el mouse sobre una fila */
        }
    </style>";

    // Definición correcta de la tabla
    echo "<table>
            <thead>
                <tr>
                    <th>Id piloto</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>Puntos</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>";

    // Recorriendo la lista de pilotos
    while ($piloto = $lista->fetch()) {
        echo "<tr>
                <td>" . htmlspecialchars($piloto['id_piloto']) . "</td>
                <td>" . htmlspecialchars($piloto['nombre']) . "</td>
                <td>" . htmlspecialchars($piloto['apellidos']) . "</td>
                <td>" . htmlspecialchars($piloto['edad']) . "</td>
                <td>" . htmlspecialchars($piloto['puntos']) . "</td> 
                <td><form><a href='./updateform.php?nombre=" . $piloto['nombre'] . "&apellido=" . $piloto['apellidos'] . "'>EDITAR</a> | <a href='delete.php?id_piloto=" . $piloto['id_piloto'] . " '>BORRAR</a></form>
              </tr>";
    }



    echo "</tbody></table>";
} catch (PDOException $excepcion) {
    echo "Error en la consulta de tipo: " . $excepcion->getMessage();
}
