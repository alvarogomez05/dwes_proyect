<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/user.css">
    <title>USERS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jaro:opsz@6..72&display=swap" rel="stylesheet">
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
        <img class="header__img" src="../assets/images/logo.png" alt="imagen de usuario">

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
        <!-- aqui van las opciones que tiene el usuario -->
        <main class="main">
            <article class="card">
                <h2 class="card__title"></h2>
                <p class="card__text"></p>
                <a href="" class="card__btn"></a>
            </article>
            <article class="card">
                <h2 class="card__title"></h2>
                <p class="card__text"></p>
                <a href="" class="card__btn"></a>
            </article>
            <article class="card">
                <h2 class="card__title"></h2>
                <p class="card__text"></p>
                <a href="" class="card__btn"></a>
            </article>
            <article class="card">
                <h2 class="card__title"></h2>
                <p class="card__text"></p>
                <a href="" class="card__btn"></a>
            </article>
        </main>

    </div>

</body>

</html>