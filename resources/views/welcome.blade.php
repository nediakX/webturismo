<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <style>
        /*=============== GOOGLE FONTS ===============*/
        @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap");

        /*=============== VARIABLES CSS ===============*/
        :root {
            --header-height: 3rem;

            /*========== Colors ==========*/
            --hue: 174;
            --sat: 63%;
            --first-color: hsl(var(--hue), var(--sat), 40%);
            --first-color-alt: hsl(var(--hue), var(--sat), 36%);
            --title-color: hsl(var(--hue), 12%, 15%);
            --text-color: hsl(var(--hue), 8%, 35%);
            --body-color: hsl(var(--hue), 100%, 99%);
            --container-color: #FFF;

            /*========== Font and typography ==========*/
            --body-font: 'Open Sans', sans-serif;
            --h1-font-size: 1.5rem;
            --normal-font-size: .938rem;
            --tiny-font-size: .625rem;

            /*========== z index ==========*/
            --z-tooltip: 10;
            --z-fixed: 100;
        }

        @media screen and (min-width: 968px) {
            :root {
                --h1-font-size: 2.25rem;
                --normal-font-size: 1rem;
            }
        }

        /*=============== BASE ===============*/
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        footer {
            margin: var(--header-height) 0 0 0;
            background-color: #96B6C5;
        }

        body {
            margin: var(--header-height) 0 0 0;
            font-family: var(--body-font);
            font-size: var(--normal-font-size);
            background-color: #F1F0E8;
            color: var(--text-color);
        }

        ul {
            list-style: none;
        }

        a {
            text-decoration: none;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        /*=============== REUSABLE CSS CLASSES ===============*/
        .section {
            padding: 4.5rem 0 2rem;
        }

        .section__title {
            font-size: var(--h1-font-size);
            color: var(--title-color);
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .section__height {
            height: 100vh;
        }

        /*=============== LAYOUT ===============*/
        .container {
            max-width: 968px;
            margin-left: 1rem;
            margin-right: 1rem;
        }

        /*=============== HEADER ===============*/
        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: var(--container-color);
            z-index: var(--z-fixed);
            transition: .4s;
            background-color: #EEE0C9;
        }

        /*=============== NAV ===============*/
        .nav {
            height: var(--header-height);
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #EEE0C9;
        }

        .nav__img {
            width: 32px;
            border-radius: 50%;
        }

        .nav__logo {
            color: var(--title-color);
            font-weight: 400;
            font-size: 30px;
            font-family: Pacifico;
            text-align: center;
            margin-left: 30px
        }



        @media screen and (max-width: 767px) {
            .nav__menu {
                position: fixed;
                bottom: 0;
                left: 0;
                background-color: var(--container-color);
                box-shadow: 0 -1px 12px hsla(var(--hue), var(--sat), 15%, 0.15);
                width: 100%;
                height: 4rem;
                padding: 0 1rem;
                display: grid;
                align-content: center;
                border-radius: 1.25rem 1.25rem 0 0;
                transition: .4s;
            }

            .nav__logo {
                text-align: center;
                width: 100%;
            }
        }

        .nav__list,
        .nav__link {
            display: flex;
        }

        .nav__link {
            flex-direction: column;
            align-items: center;
            row-gap: 4px;
            color: var(--title-color);
            font-weight: 600;
        }

        .nav__list {
            justify-content: space-around;
        }

        .nav__name {
            font-size: var(--tiny-font-size);
            /* display: none;*/
            /* Minimalist design, hidden labels */
        }

        .nav__icon {
            font-size: 1.5rem;
        }

        /*Active link*/
        .active-link {
            position: relative;
            color: var(--first-color);
            transition: .3s;
        }

        /* Minimalist design, active link */
        /* .active-link::before{
        content: '';
        position: absolute;
        bottom: -.5rem;
        width: 4px;
        height: 4px;
        background-color: var(--first-color);
        border-radius: 50%;
        } */

        /* Change background header */
        .scroll-header {
            box-shadow: 0 1px 12px hsla(var(--hue), var(--sat), 15%, 0.15);

        }

        /*=============== MEDIA QUERIES ===============*/
        /* For small devices */
        /* Remove if you choose, the minimalist design */
        @media screen and (max-width: 320px) {
            .nav__name {
                display: none;
            }
        }

        /* For medium devices */
        @media screen and (min-width: 576px) {
            .nav__list {
                justify-content: center;
                column-gap: 3rem;
            }
        }

        @media screen and (min-width: 767px) {
            body {
                margin: 0;
            }

            .section {
                padding: 7rem 0 2rem;
            }

            .nav {
                height: calc(var(--header-height) + 1.5rem);
                /* 4.5rem */
            }

            .nav__img {
                display: none;
            }

            .nav__icon {
                display: none;
            }

            .nav__name {
                font-size: var(--normal-font-size);
                /* display: block; */
                /* Minimalist design, visible labels */
            }

            .nav__link:hover {
                color: var(--first-color);
            }

            /* First design, remove if you choose the minimalist design */
            .active-link::before {
                content: '';
                position: absolute;
                bottom: -.75rem;
                width: 4px;
                height: 4px;
                background-color: var(--first-color);
                border-radius: 50%;
            }

            /* Minimalist design */
            /* .active-link::before{
            bottom: -.75rem;
        } */
        }

        /* For large devices */
        @media screen and (min-width: 1024px) {
            .container {
                margin-left: auto;
                margin-right: auto;
            }
        }

        table {
            border-collapse: collapse;
            width: 100%;
            text-align: center;
            margin-top: 20px;
        }

        th {
            text-align: center;
            padding: 8px;

        }

        .textinfo {
            margin: 1px
        }

        .map-responsive {
            overflow: hidden;
            padding-bottom: 50%;
            position: relative;
            height: 0;
        }

        .map-responsive iframe {
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            position: absolute;
        }
    </style>

    <title>Turismo Diego de Almagro</title>
</head>

<body>
    <!--=============== HEADER ===============-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">Inteligencia Turistica</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#inicio" class="nav__link active-link">
                            <i class='bx bx-home-alt-2 nav__icon'></i>
                            <span class="nav__name">Inicio</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#Informacion" class="nav__link">
                            <i class='bx bx-info-circle nav__icon'></i>
                            <span class="nav__name">Información</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#Mapa Comunal" class="nav__link">
                            <i class='bx bx-map-pin nav__icon'></i>
                            <span class="nav__name">Mapa Comunal</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#pladetur" class="nav__link">
                            <i class='bx bx-objects-vertical-bottom nav__icon'></i>
                            <span class="nav__name">PLADETUR</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#contacto" class="nav__link">
                            <i class='bx bx-id-card nav__icon'></i>
                            <span class="nav__name">Contacto</span>
                        </a>
                    </li>
                </ul>
            </div>

            <img src="assets/img/perfil.png" alt="" class="nav__img">
        </nav>
    </header>

    <main>
        <!--=============== Inicio ===============-->
        <section class="container section section__height" id="inicio">
            <a class="weatherwidget-io" href="https://forecast7.com/en/n26d39n70d05/diego-de-almagro/"
                data-label_1="DIEGO DE ALMAGRO" data-label_2="TEMPERATURA ONLINE" data-theme="original">DIEGO DE ALMAGRO
                CHILE</a>
            <script>
                ! function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (!d.getElementById(id)) {
                        js = d.createElement(s);
                        js.id = id;
                        js.src = 'https://weatherwidget.io/js/widget.min.js';
                        fjs.parentNode.insertBefore(js, fjs);
                    }
                }(document, 'script', 'weatherwidget-io-js');
            </script>
            <br>
            <h2 class="section__title">Explora la Magia de Diego de Almagro: Tu Destino Turístico Excepcional</h2>
            <span>
                ¡Bienvenido a nuestra plataforma de turismo dedicada a la hermosa región de Diego de Almagro! Aquí te
                sumergirás en un viaje lleno de descubrimientos, aventuras y momentos inolvidables mientras exploras
                todo lo que esta región tiene para ofrecer.</span>
            <br>
            <span>Desde sus paisajes naturales y culturales hasta su rica historia y tradiciones, estamos aquí para
                llevarte a una experiencia turística única.</span>
        </section>
        <!--=============== Informacion ===============-->
        <section class="container section section__height" id="Informacion">
            <h2 class="section__title">Descubre la Belleza Natural</h2>
            <span>
                En Diego de Almagro, la naturaleza es nuestra mayor joya. Desde imponentes montañas hasta valles
                exuberantes y oasis secretos, esta región te invita a explorar sus maravillas naturales. Sumérgete en el
                verde de sus bosques, admira la grandeza de sus formaciones geológicas y maravíllate con sus cascadas
                cristalinas. Prepárate para vivir aventuras al aire libre que te conectarán con la tierra y te llenarán
                de energía.
            </span>
        </section>

        <!--=============== Mapa Comunal ===============-->
        <section class="container section section__height" id="Mapa Comunal">
            <h2 class="section__title">Mapa Comunal</h2>
            <div class="map-responsive">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d57185.69543856962!2d-70.0638247!3d-26.387764!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x96a3b8999bf7d10b%3A0xb5d8c94c65e28c48!2s1500241%20Diego%20de%20Almagro%2C%20Atacama!5e0!3m2!1ses-419!2scl!4v1692302890044!5m2!1ses-419!2scl
                    width="600"
                    height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </section>

        <!--=============== PlaDeTur ===============-->
        <section class="container section section__height" id="pladetur">
            <h2 class="section__title">Tu Plan con PlaDeTur</h2>
            <span>
                ¿Quieres aprovechar al máximo tu visita? No te pierdas nuestro Plan de Desarrollo Turístico (PlaDetur).
                Diseñado para que tu experiencia sea excepcional, el PlaDetur te ofrece itinerarios personalizados,
                recomendaciones de actividades, rutas temáticas y consejos locales. Te ayudaremos a explorar la región
                de una manera auténtica y significativa, garantizando que cada momento de tu viaje sea especial.
            </span>
        </section>

        <!--=============== Contacto ===============-->
        <footer>

            <section class="container section section__height" id="contacto">
                <h2 class="section__title">Contáctanos y Reserva</h2>
                <div class="textinfo">

                    <span>¿Listo para comenzar tu aventura en Diego de Almagro? Contáctanos para obtener más
                        información,
                        hacer preguntas o reservar tu estadía. Nuestro equipo está aquí para brindarte asistencia y
                        asegurarse de que tengas una experiencia perfecta desde el momento en que llegas hasta el
                        momento en
                        que te despides.
                    </span>
                </div>
                <div class="textinfo" style="margin-top: 20px">
                    <span>
                        ¡Prepárate para un viaje inolvidable lleno de maravillas naturales, patrimonio cultural y
                        conexiones
                        significativas en la región de Diego de Almagro!</span>
                    <br>
                    <br>
                    <br>
                </div>
                <table>
                    <tr>
                        <th>
                            <h1>Redes Sociales</h1>
                        </th>

                        <th>
                            <h1 style="text-align: left">Detalles de Contacto</h1>
                        </th>
                    </tr>
                    <tr>
                        <td> <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
                                style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                <path
                                    d="M12.001 2.002c-5.522 0-9.999 4.477-9.999 9.999 0 4.99 3.656 9.126 8.437 9.879v-6.988h-2.54v-2.891h2.54V9.798c0-2.508 1.493-3.891 3.776-3.891 1.094 0 2.24.195 2.24.195v2.459h-1.264c-1.24 0-1.628.772-1.628 1.563v1.875h2.771l-.443 2.891h-2.328v6.988C18.344 21.129 22 16.992 22 12.001c0-5.522-4.477-9.999-9.999-9.999z">
                                </path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
                                style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M18.403 5.633A8.919 8.919 0 0 0 12.053 3c-4.948 0-8.976 4.027-8.978 8.977 0 1.582.413 3.126 1.198 4.488L3 21.116l4.759-1.249a8.981 8.981 0 0 0 4.29 1.093h.004c4.947 0 8.975-4.027 8.977-8.977a8.926 8.926 0 0 0-2.627-6.35m-6.35 13.812h-.003a7.446 7.446 0 0 1-3.798-1.041l-.272-.162-2.824.741.753-2.753-.177-.282a7.448 7.448 0 0 1-1.141-3.971c.002-4.114 3.349-7.461 7.465-7.461a7.413 7.413 0 0 1 5.275 2.188 7.42 7.42 0 0 1 2.183 5.279c-.002 4.114-3.349 7.462-7.461 7.462m4.093-5.589c-.225-.113-1.327-.655-1.533-.73-.205-.075-.354-.112-.504.112s-.58.729-.711.879-.262.168-.486.056-.947-.349-1.804-1.113c-.667-.595-1.117-1.329-1.248-1.554s-.014-.346.099-.458c.101-.1.224-.262.336-.393.112-.131.149-.224.224-.374s.038-.281-.019-.393c-.056-.113-.505-1.217-.692-1.666-.181-.435-.366-.377-.504-.383a9.65 9.65 0 0 0-.429-.008.826.826 0 0 0-.599.28c-.206.225-.785.767-.785 1.871s.804 2.171.916 2.321c.112.15 1.582 2.415 3.832 3.387.536.231.954.369 1.279.473.537.171 1.026.146 1.413.089.431-.064 1.327-.542 1.514-1.066.187-.524.187-.973.131-1.067-.056-.094-.207-.151-.43-.263">
                                </path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
                                style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                <path
                                    d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z">
                                </path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                <path
                                    d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z">
                                </path>
                                <circle cx="16.806" cy="7.207" r="1.078"></circle>
                                <path
                                    d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z">
                                </path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                <path
                                    d="M21.593 7.203a2.506 2.506 0 0 0-1.762-1.766C18.265 5.007 12 5 12 5s-6.264-.007-7.831.404a2.56 2.56 0 0 0-1.766 1.778c-.413 1.566-.417 4.814-.417 4.814s-.004 3.264.406 4.814c.23.857.905 1.534 1.763 1.765 1.582.43 7.83.437 7.83.437s6.265.007 7.831-.403a2.515 2.515 0 0 0 1.767-1.763c.414-1.565.417-4.812.417-4.812s.02-3.265-.407-4.831zM9.996 15.005l.005-6 5.207 3.005-5.212 2.995z">
                                </path>
                            </svg>
                        </td>
                        <td style="width: 50%">
                            <p style="text-align: left">Teléfono: +123456789</p>
                            <p style="text-align: left">Correo Electrónico: ejemplo@dominio.com</p>
                        </td>
                    </tr>
                </table>
                </div>
            </section>
        </footer>
    </main>


    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
</body>

</html>
