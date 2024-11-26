<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
    <?php
    //iniciamos la sesion
    session_start();
    //prueba de imprimir el nombre del usuario que ha entrado
    // echo "<p>" . $_SESSION['user'] . "</p>"
    ?>
    <!-- header -->
    <header class="header">
        <!-- imagen de perfil para el usuario -->
        <img class="header__img" src="" alt="">

        <div class="header__menu">
            <nav class="header__nav">
                <ul class="ul__list">
                    <li class="list___item"><a href="./admin.php" class="list__link">home</a></li>
                    <li class="list___item"><a href="#" class="list__link">circuitos</a></li>
                    <li class="list___item"><a href="#" class="list__link">motos</a></li>
                    <li class="list___item"><a href="#" class="list__link">pilotos</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">

    </div>

</body>

</html>