<?php
//iniciamos la sesion
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moto gp</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>

    <div class="container">
        <div class="form-container">
            <h2 id="titulo">Iniciar Sesión</h2>
            <form action="./pages/destino.php" class="form" method="POST" id="formulario1">
                <div>
                    <label for="usuario">Usuario</label>
                    <input type="text" id="usuario" name="nombre" required>
                </div>
                <div>
                    <label for="contrasena">Contraseña</label>
                    <input type="password" id="contrasena" name="password" required>
                </div>

                <?php
                if (isset($_SESSION['error'])) {
                    echo "<p class='error'> " . $_SESSION['error'] . " </p>";
                }
                ?>

                <input type="submit" value="iniciar Sesión">
                <input type="submit" value="Registrarse" id="register">

            </form>

            <!-- Formulario de Registro -->
            <h2 id="tituloRegistro" class="titulo">Registrar</h2>
            <form action="./pages/registro.php" class="form form2" method="POST" id="formulario2">
                <div>
                    <label for="usuarioRegistro">Usuario</label>
                    <input type="text" id="usuarioRegistro" name="nombreRegistro" required>
                </div>

                <div>
                    <label for="contrasenaRegistro">Contraseña</label>
                    <input type="password" id="contrasenaRegistro" name="passwordRegistro" required>
                </div>
                <div id="rol" class="rol">
                    <label for="rol">Rol</label>
                    <input type="text" id="rol" name="rol" required>
                </div>
                <input type="submit" value="Registrar" id="registrar" class="registrar">
            </form>


        </div>

    </div>

</body>
<script src="./js/script.js"></script>

</html>