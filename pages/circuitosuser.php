<?php

include "./funciones.php";

conectar();


if (isset($_POST['continente'])) {
    $continente = $_POST['continente'];
}

//conectamos la bdd

try {
    $sql = "SELECT * FROM circuitos WHERE continente = '$continente'";
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
                    <th>Nombre</th>
                    <th>pais</th>
                    <th>continente</th>
                </tr>
            </thead>
            <tbody>";

    // Recorriendo la lista de pilotos
    while ($circuitos = $lista->fetch()) {
        echo "<tr>
                <td>" . htmlspecialchars($circuitos['nombre']) . "</td>
                <td>" . htmlspecialchars($circuitos['pais']) . "</td>
                <td>" . htmlspecialchars($circuitos['continente']) . "</td>
              </tr>";
    }



    echo "</tbody></table>";
} catch (PDOException $excepcion) {
    echo "Error en la consulta de tipo: " . $excepcion->getMessage();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="./user.php">VOLVER</a>
</body>

</html>