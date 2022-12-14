<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Secion</title>
    <link rel="stylesheet" href="/css/login.css">
</head>

<body>
    <!-- <iframe class="contenedor_headers" src="/recursos/headers.html" frameborder="0"></iframe> -->

    <form action="">
        <div>
            <!-- <img src="/img/logo_bazar.svg" alt="nuestro_logo"> -->
            <a href="/index.html">
                <img src="/img/logo_bazar.svg" alt="nuestro_logo">
            </a>
        </div>
        <label for="">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="44" height="44"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffbf00" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <circle cx="9" cy="7" r="4" />
                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
            </svg>
            <input type="text" id="username" placeholder="Tu Usuario">
        </label>
        <label for="">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-key" width="44" height="44"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffbf00" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <circle cx="8" cy="15" r="4" />
                <line x1="10.85" y1="12.15" x2="19" y2="4" />
                <line x1="18" y1="5" x2="20" y2="7" />
                <line x1="15" y1="8" x2="17" y2="10" />
            </svg>
            <input type="password" id="password" placeholder="Tu Contraseña">
        </label>
        <a href="#" class="link">¿Olvidaste tu contraseña?</a>
        <p>¿Aun no tienes una cuenta?<a href="/paginas/sign-in.html" class="registros"><b>Registrate</b> </a></p>
        <button class="botonlogin">Iniciar la sesión</button>
        <button class="botonback">
            <a href="/index.html">Regresar</a>
        </button>
    </form>
    <script src="/js/login.js"></script>
    <!-- <iframe class="contenedor_footers" src="/recursos/footers.html" frameborder="0"></iframe> -->

</body>

</html>