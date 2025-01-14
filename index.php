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
    <title>Ver anime en HD</title>
    
    <!--Css-->
    <link rel="icon" href="https://i.postimg.cc/RC8YQRd3/Pin.png" type="image/x-icon"> 
    <link rel="stylesheet" href="assets/css/inicio.css">

</head>
<body>
    <header class="header">
        <div class="menu container">
            <a href="index.php" class="inicio">
                <img src="https://i.postimg.cc/0QkTFyKb/Logo.png" alt="AnimeClub" id="logo">
            </a>
            <input type="checkbox" id="menu"/>
            <label for="menu">
                <img src="https://i.postimg.cc/7LnvK26F/menu.png" class="menu-icono" alt="menu">
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
                <h1>¡Disfruta del mejor anime en HD!</h1><br>
            </div>
        </div>
    </header>

    <section class="slider">
        <div class="slider-box">
            <ul>
                <li>
                    <img src="https://i.postimg.cc/MpjqmH1w/Fondo_1.webp" alt="slider">
                    <div class="texto">
                        <h2>Goblin Slayer II</h2>
                        <a href="#" class="bot-2">Ver ahora</a>
                    </div>
                </li>
                <li>
                    <img src="https://i.postimg.cc/LXmSSVw4/Fondo_2.jpg" alt="slider">
                    <div class="texto">
                        <h2>Mushoku Tensei: Isekai Ittara Honki Dasu</h2>
                        <a href="#" class="bot-2">Ver ahora</a>
                    </div>
                </li>
                <li>
                    <img src="https://i.postimg.cc/jjHTB18k/Fondo_3.jpg" alt="slider">
                    <div class="texto">
                        <h2>Kimetsu no Yaiba: Katanakaji no Sato-hen</h2>
                        <a href="#" class="bot-2">Ver ahora</a>
                    </div>
                </li>
                <li>
                    <img src="https://i.postimg.cc/q7V0brG3/Fondo_4.webp" alt="slider">
                    <div class="texto">
                        <h2>Oshi No Ko</h2>
                        <a href="#" class="bot-2">Ver ahora</a> 
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section class="anime container">
        <h2>Mejores Franquicias</h2>
        <hr>
        <div class="box-container-1">
            <div class="box-1">
                <div class="content">
                    <a href="#">
                        <article>
                            <img src="https://i.postimg.cc/c15pkZxL/One-piece.jpg" alt="card">
                            <img src="https://i.postimg.cc/Y2dh04pq/1.png" alt="anim">
                        </article>
                        <h3 class="title">One piece</h3>
                    </a>
                </div>
            </div>
            <div class="box-1">
                <div class="content">
                    <a href="#">
                        <article>
                            <img src="https://i.postimg.cc/Kz5Z3WBg/Dragon-ball.jpg" alt="card">
                            <img src="https://i.postimg.cc/K8ctKXTt/2.png" alt="anim">
                        </article>
                        <h3 class="title">Dragon Ball Super</h3>
                    </a>
                </div>
            </div>
            <div class="box-1">
                <div class="content">
                    <a href="#">
                        <article>
                            <img src="https://i.postimg.cc/j2CGq3XT/Naruto.jpg" alt="card">
                            <img src="https://i.postimg.cc/gjq6J4kM/3.png" alt="anim">
                        </article>
                        <h3 class="title">Naruto</h3>
                    </a>
                </div>
            </div>
            <div class="box-1">
                <div class="content">
                    <a href="#">
                        <article>
                            <img src="https://i.postimg.cc/C5t9RCPq/Naruto-Shippuden.jpg" alt="card">
                            <img src="https://i.postimg.cc/fyh9D1Zt/4.png" alt="anim">
                        </article>
                        <h3 class="title">Naruto Shippuden</h3>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <section class="anime container">
        <h2>Mejores Anime Actualmente</h2>
        <hr>
        <div class="box-container-2">
            <div class="box-2">
                <div class="content">
                    <a href="#">
                        <article>
                            <img src="https://i.postimg.cc/L6GM5Swb/Jujutsu-kaisen.jpg" alt="card">
                            <img src="https://i.postimg.cc/59wzn9qw/5.png" alt="anim">
                        </article>
                        <h3 class="title">Jujutsu kaisen</h3>
                    </a>
                </div>
            </div>
            <div class="box-2">
                <div class="content">
                    <a href="#">
                        <article>
                            <img src="https://i.postimg.cc/VLJ8zvGt/Jujutsu-kaisen-0.jpg" alt="card">
                            <img src="https://i.postimg.cc/QxmTZ6zC/6.webp" alt="anim">
                        </article>
                        <h3 class="title">Jujutsu kaisen 0</h3>
                    </a>
                </div>
            </div>
            <div class="box-2">
                <div class="content">
                    <a href="#">
                        <article>
                            <img src="https://i.postimg.cc/nVRx8BkZ/Jujutsu-kaisen-Secuela-2.jpg" alt="card">
                            <img src="https://i.postimg.cc/X74ChMQt/7.png" alt="anim">
                        </article>
                        <h3 class="title">Jujuts Kaisen Prt.2</h3>
                    </a>
                </div>
            </div>
            <div class="box-2">
                <div class="content">
                    <a href="#">
                        <article>
                            <img src="https://i.postimg.cc/5yNfBmSK/Dr-Stone.jpg" alt="card">
                            <img src="https://i.postimg.cc/3w44p3x0/8.png" alt="anim">
                        </article>
                        <h3 class="title">Dr. Stone</h3>
                    </a>
                </div>
            </div>
            <div class="box-2">
                <div class="content">
                    <a href="#">
                        <article>
                            <img src="https://i.postimg.cc/YS3V6BDk/Spy-x-Family.jpg" alt="card">
                            <img src="https://i.postimg.cc/y8r3kDsz/9.png" alt="anim">
                        </article>
                        <h3 class="title">Spy x Family</h3>
                    </a>
                </div>
            </div>
            <div class="box-2">
                <div class="content">
                    <a href="#">
                        <article>
                            <img src="https://i.postimg.cc/gkXff5jq/One-punch.jpg" alt="card">
                            <img src="https://i.postimg.cc/VvjXtm4W/10.png" alt="anim">
                        </article>
                        <h3 class="title">One Punch Man</h3>
                    </a>
                </div>
            </div>
            <div class="box-2">
                <div class="content">
                    <a href="#">
                        <article>
                            <img src="https://i.postimg.cc/tTvMctHM/Tate-no-yuusha.jpg" alt="card">
                            <img src="https://i.postimg.cc/5tR5dP6L/11.png" alt="anim">
                        </article>
                        <h3 class="title">Tate no Yuusha no Nariagari</h3>
                    </a>
                </div>
            </div>
            <div class="box-2">
                <div class="content">
                    <a href="#">
                        <article>
                            <img src="https://i.postimg.cc/TYD4kDNt/Zom-100-Zombie.jpg" alt="card">
                            <img src="https://i.postimg.cc/2STFTjYH/12.png" alt="anim">
                        </article>
                        <h3 class="title">Zom 100: Zombie ni Naru made ni Shitai 100 no Koto</h3>
                    </a>
                </div>
            </div>
        </div>

        <div class="load-more" id="load-more-1">Cargar mas</div>
    </section>

    <section class="anime container">
        <h2>Ver animes</h2>
        <hr>
        <div class="box-container-3">
            <div class="box-3">
                <div class="content">
                    <a href="#">
                        <article>
                            <img src="https://i.postimg.cc/qq9ZJJqc/Undead-unluck.jpg" alt="card">
                            <img src="https://i.postimg.cc/MGT0LkKz/13.webp" alt="anim">
                        </article>
                        <h3 class="title">Undead Unluck</h3>
                    </a>
                </div>
            </div>
            <div class="box-3">
                <div class="content">
                    <a href="#">
                        <article>
                            <img src="https://i.postimg.cc/Bb6GLnJd/Goblin-Slayer-Goblin-s-Crown.jpg" alt="card">
                            <img src="https://i.postimg.cc/sXGYVph8/14.png" alt="anim">
                        </article>
                        <h3 class="title">Goblin Slayer: Goblin's Crown</h3>
                    </a>
                </div>
            </div>
            <div class="box-3">
                <div class="content">
                    <a href="#">
                        <article>
                            <img src="https://i.postimg.cc/vT1NwgYH/Tokyo-Revengers.jpg" alt="card">
                            <img src="https://i.postimg.cc/YCtz1G5G/15.png" alt="anim">
                        </article>
                        <h3 class="title">Tokyo Revengers</h3>
                    </a>
                </div>
            </div>
            <div class="box-3">
                <div class="content">
                    <a href="#">
                        <article>
                            <img src="https://i.postimg.cc/sDktycZF/Overtake.jpg" alt="card">
                            <img src="https://i.postimg.cc/m2YSzN5W/16.png" alt="anim">
                        </article>
                        <h3 class="title">Overtake!</h3>
                    </a>
                </div>
            </div>
            <div class="box-3">
                <div class="content">
                    <a href="#">
                        <article>
                            <img src="https://i.postimg.cc/nzxFzxjJ/Capitan-tsubasa.jpg" alt="card">
                            <img src="https://i.postimg.cc/mkxQht3r/17.png" alt="anim">
                        </article>
                        <h3 class="title">Captain Tsubasa</h3>
                    </a>
                </div>
            </div>
            <div class="box-3">
                <div class="content">
                    <a href="#">
                        <article>
                            <img src="https://i.postimg.cc/B6nzN7RF/Ragna-Crimson.jpg" alt="card">
                            <img src="https://i.postimg.cc/BZDTkBsP/18.png" alt="anim">
                        </article>
                        <h3 class="title">Ragna Crimson</h3>
                    </a>
                </div>
            </div>
            <div class="box-3">
                <div class="content">
                    <a href="#">
                        <article>
                            <img src="https://i.postimg.cc/T14vrvwh/Hanma-Baki-Son-of-Ogre-2nd-Season.jpg" alt="card">
                            <img src="https://i.postimg.cc/Zq2NDCML/19.png" alt="anim">
                        </article>
                        <h3 class="title">Hanma Baki: Son of Ogre 2nd Season</h3>
                    </a>
                </div>
            </div>
            <div class="box-3">
                <div class="content">
                    <a href="#">
                        <article>
                            <img src="https://i.postimg.cc/25DRdwzd/Kimi-no-Koto-ga-Daidaidaidaidaisuki-na-100-nin-no-Kanojo.jpg" alt="card">
                            <img src="https://i.postimg.cc/3JTXT0JS/20.png" alt="anim">
                        </article>
                        <h3 class="title">Kimi no Koto ga Daidaidaidaidaisuki na 100-nin no Kanojo</h3>
                    </a>
                </div>
            </div>
        </div>

        <div class="load-more" id="load-more-2">Cargar mas</div>
    </section>

    <div class="buttom-flotante" id="buttom-flotante">
        <a href="index.php">
        <img src="https://i.postimg.cc/QxCXV0tH/Flecha.png" alt="flotante">
        </a>
    </div>

    <footer class="footer container">
        <h3>AnimeliClub</h3>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="politica.php">Politicas de la pagina</a></li>
            <li><a href="https://es-la.facebook.com/gabriel.anillo.3">Red social del creador</a></li>
        </ul>

    </footer>

    <script src="assets/js/inicio.js"></script>
    <script>
        const nav = document.querySelector('.menu.container');

        window.addEventListener('scroll', function(){
            nav.classList.toggle('active', window.scrollY > 0);
        })
    </script>

    </body>
    </html>