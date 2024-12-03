<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jaro:opsz@6..72&display=swap" rel="stylesheet">
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
                admin
                <!-- <?php

                        echo $_SESSION['user'];

                        ?> -->
            </p>
            <!-- este enlace le permitira al usuario modificar sus credenciales -->
            <!-- Con js al hacer click en este enlace aparecerá la ventana modal con el formulario -->
            <div class="aside__box">
                <p class="aside__link" id="infoo">INFO</p>

                <a href="cerrar_sesion.php" class="aside__link">Cerrar sesion</a>
            </div>

            <div class="containerForm" id="containerForm">
                <form class="form" id="form" action="cambiarcontrasenauser.php" method="post">
                    <div class="bienvenida">
                        <label for="">Hola <?php echo $_SESSION['user'] ?> ¿Quieres cambiar la contraseña?</label>
                        <div>
                            <label for="">Nueva contraseña</label>
                            <input type="text" name="nuevacontraseña">
                        </div>
                    </div>
                    <div class="repite">
                        <label for="">Repite la contraseña</label>
                        <input type="text" name="nuevacontraseña2">
                    </div>


                    <div class="botones">
                        <button type="submit">Confirmar</button>
                        <button type="reset">Borrar</button>
                    </div>
                    <p class="salir" id="salir">X</p>
                </form>

            </div>

        </aside>
        <!-- aqui van las opciones que tiene el usuario -->
        <main class="main">
            <article class="card">
                <h2 class="card__title">Puntuaciones</h2>
                <p class="card__text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel numquam magnam, unde rerum dolores inventore aliquam. Cum amet nobis veritatis dicta perferendis, omnis inventore minus commodi facere beatae esse eaque?</p>
                <p href="" class="card__btn">ver puntos</p>
            </article>
            <article class="card">
                <h2 class="card__title">Pilotos</h2>
                <p class="card__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati animi voluptates neque? Possimus pariatur ipsum sint magni quia? Delectus deserunt iure sed ea consectetur natus nobis dolore maiores, amet praesentium!</p>
                <p href="" class="card__btn" id="listar_piloto">ver pilotos</p>
            </article>
            <article class="card">
                <h2 class="card__title">Equipos</h2>
                <p class="card__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati animi voluptates neque? Possimus pariatur ipsum sint magni quia? Delectus deserunt iure sed ea consectetur natus nobis dolore maiores, amet praesentium!</p>
                <p href="" class="card__btn">ver equipos</p>
            </article>
            <article class="card">
                <h2 class="card__title">Circuitos</h2>
                <p class="card__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum in quos fugiat. Expedita maxime corporis laborum, possimus sequi vel dolore unde sint exercitationem. Error distinctio, dolor voluptatum id laborum enim.</p>
                <p href="" class="card__btn">ver circuitos</p>
            </article>
        </main>
    </div>
    <div id="lista_pilotos" style="width: 1200px; margin:0 auto;">
        <?php
        include_once "pilotosadmin.php";
        ?>

    </div>
</body>
<script src="./../js/admin.js"></script>

</html>