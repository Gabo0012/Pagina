<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor debes iniciar sesion");
                window.location = "login.php";
            </script>
        ';
        session_destroy();
        die();
    }

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:site_name" content="AnimeliClub"/>
    <title>Sobre AnimeliClub</title>

    <!--Css-->
    <link rel="icon" href="https://i.postimg.cc/RC8YQRd3/Pin.png" type="image/x-icon"> 
    <link rel="stylesheet" href="assets/css/nosotros.css">

</head>

<body>
    <header class="header">
        <div class="menu container">
            <a href="index.php" class="inicio">
                <img src="https://i.postimg.cc/0QkTFyKb/Logo.png" alt="AnimeClub" id="logo">
            </a>
            <input type="checkbox" id="menu"/>
            <label for="menu">
                <img src="https://i.postimg.cc/7LnvK26F/menu.pngg" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="diagrama.php">Animes</a></li>
                    <li><a href="sobre_nosotros.php">Sobre nosotros</a></li>
                </ul>
            </nav>
            <a href="php/cerrar_sesion.php" id="loginButton" class="btn-1">Salir</a>
        </div>
        
        <div class="header-content container">
            <div class="header-1">
                <h1>Sobre AnimeliClub</h1>
            </div>
        </div>
    </header>
    
    <section class="sobre-info">
        <div class="text-container">
            <p class="text">Bienvenido a AnimeliClub, tu destino definitivo para sumergirte en el emocionante mundo del anime. En nuestro rincón vibrante virtual, te invitamos a explorar un extenso catálogo de series y películas anime que abarcan géneros desde acción y aventuras hasta romance y ciencia ficción. <br><br> 1.Biblioteca Exclusiva <br><br> 2.Experiencia Responsive <br><br> 3.Comunidad Apasionada <br><br> En AnimeliClub, creemos que el anime es más que solo entretenimiento; es una forma de arte que puede inspirar, emocionar y unir a personas de todo el mundo. Únete a nosotros en esta emocionante aventura y deja que AnimeliClub sea tu portal personal hacia el fascinante universo del anime. ¡Prepárate para sumergirte en historias inolvidables y emociones intensas en AnimeliClub, donde la magia del anime cobra vida!</p>
        </div>
    </section>

    <footer class="footer container">
        <h3>AnimeliClub</h3>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="politica.php">Politicas de la pagina</a></li>
            <li><a href="https://es-la.facebook.com/gabriel.anillo.3">Red social del creador</a></li>
        </ul>

    </footer>

    <script>
        const nav = document.querySelector('.menu.container');

        window.addEventListener('scroll', function(){
            nav.classList.toggle('active', window.scrollY > 0);
        })
    </script>

</body>
</html>