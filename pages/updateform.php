<?php

// echo 'actualizar';

if (isset($_GET['nombre']) && isset($_GET['apellido'])) {
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del piloto</title>
</head>

<body>
    <!-- el action nos enviara a la página que actualizará los datos en la bdd y posteriormente redireccionara a la pagina admin.php -->
    <form action="update.php" method="post">
        <div>
            <label for="">Nombre</label>
            <!-- nombre del piloto -->
            <span><?php
                    echo $nombre;
                    ?></span>
            <input type="hidden" name="nombre" value="<?php
                                                        //el value tamben es el nombre del piloto
                                                        echo $nombre;
                                                        ?>">
        </div>
        <div>
            <label for="">Apellidos</label>
            <!-- apellidos del piloto -->
            <span><?php
                    echo $apellido;
                    ?></span>
            <input type="hidden" name="apellidos" value="<?php
                                                            //el value tambien es el apellido del piloto
                                                            echo $apellido;
                                                            ?>">
        </div>
        <div>
            <label for="">Escuderia</label>
            <!-- select con las escuderias -->
            <select name="escuderia" id="">
                <option value="1">Repsol Honda</option>
                <option value="3">Ducati Lenovo</option>
                <option value="2">Monster Energy Yamaha</option>
            </select>
        </div>

        <div>
            <label for="">Fabrica</label>
            <!-- select con las fabricas -->
            <select name="fabrica" id="">
                <option value="1">Ducati</option>
                <option value="2">Yamaha</option>
                <option value="3">KTM</option>
                <option value="4">Aprillia</option>
                <option value="5">Honda</option>
            </select>
        </div>

        <button type="submit">enviar</button>
        <button type="reset">borrar</button>

    </form>

</body>

</html>