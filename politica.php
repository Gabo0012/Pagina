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
    <title>Politica y Privacidad</title>

    <!--Css-->
    <link rel="icon" href="https://i.postimg.cc/RC8YQRd3/Pin.png" type="image/x-icon"> 
    <link rel="stylesheet" href="assets/css/politica.css">

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
                <h1>Politicas de privacidad</h1>
            </div>
        </div>
    </header>
    
    <section class="sobre-info">
        <div class="text-container">
            <p class="text">La Política de Privacidad establece los términos en que AnimeliClub usa y protege la información que es proporcionada por sus usuarios al momento de utilizar su sitio web. Esta compañía está comprometida con la seguridad de los datos de sus usuarios. Cuando le pedimos llenar los campos de información personal con la cual usted pueda ser identificado, lo hacemos asegurando que sólo se empleará de acuerdo con los términos de este documento. Sin embargo, esta Política de Privacidad puede cambiar con el tiempo o ser actualizada por lo que le recomendamos y enfatizamos revisar continuamente esta página para asegurarse que está de acuerdo con dichos cambios.</p>
        </div>
        <div class="text-container">
            <h2>Informacion recogida</h2>
            <hr>
            <p class="text">Nuestro sitio web podrá recoger información personal, por ejemplo: Nombre, información de contacto como su dirección de correo electrónica e información demográfica. Así mismo cuando sea necesario podrá ser requerida información específica para procesar algún pedido o realizar una entrega o facturación.</p>
        </div>
        <div class="text-container">
            <h2>Uso de la información recogida</h2>
            <hr>
            <p class="text">Nuestro sitio web emplea la información con el fin de proporcionar el mejor servicio posible, particularmente para mantener un registro de usuarios, de pedidos en caso que aplique, y mejorar nuestros productos y servicios. Es posible que sean enviados correos electrónicos periódicamente a través de nuestro sitio con ofertas especiales, nuevos productos y otra información publicitaria que consideremos relevante para usted o que pueda brindarle algún beneficio, estos correos electrónicos serán enviados a la dirección que usted proporcione y podrán ser cancelados en cualquier momento.</p>
        </div>
        <div class="text-container">
            <h2>Uso de la información recogida</h2>
            <hr>
            <p class="text">Este sitio web pudiera contener en laces a otros sitios que pudieran ser de su interés. Una vez que usted de clic en estos enlaces y abandone nuestra página, ya no tenemos control sobre al sitio al que es redirigido y por lo tanto no somos responsables de los términos o privacidad ni de la protección de sus datos en esos otros sitios terceros. Dichos sitios están sujetos a sus propias políticas de privacidad por lo cual es recomendable que los consulte para confirmar que usted está de acuerdo con estas.</p>
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