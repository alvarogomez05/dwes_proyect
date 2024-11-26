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
        <!-- imagen del logo -->
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
        <aside class="aside">
            <!-- imagen del usuario -->
            <img src="../assets/images/user.png" alt="">
            <p class="aside__name">
                <?php

                echo $_SESSION['user'];

                ?>
            </p>
        </aside>
        <!-- aqui van las opciones que tiene el usuario -->
        <main class="main">
            <article class="card">
                <h2 class="card__title">Puntuaciones</h2>
                <p class="card__text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel numquam magnam, unde rerum dolores inventore aliquam. Cum amet nobis veritatis dicta perferendis, omnis inventore minus commodi facere beatae esse eaque?</p>
                <a href="" class="card__btn">ver puntos</a>
            </article>
            <article class="card">
                <h2 class="card__title">Pilotos</h2>
                <p class="card__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati animi voluptates neque? Possimus pariatur ipsum sint magni quia? Delectus deserunt iure sed ea consectetur natus nobis dolore maiores, amet praesentium!</p>
                <a href="" class="card__btn">ver pilotos</a>
            </article>
            <article class="card">
                <h2 class="card__title">Equipos</h2>
                <p class="card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum recusandae neque quis, earum maiores inventore magni laudantium tenetur autem.</p>
                <a href="" class="card__btn">ver equipos</a>
            </article>
            <article class="card">
                <h2 class="card__title">Circuitos</h2>
                <p class="card__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum in quos fugiat. Expedita maxime corporis laborum, possimus sequi vel dolore unde sint exercitationem. Error distinctio, dolor voluptatum id laborum enim.</p>
                <a href="" class="card__btn">ver circuitos</a>
            </article>
        </main>

    </div>

</body>

</html>