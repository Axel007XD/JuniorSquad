<!DOCTYPE html>
<html>
    <head>
            
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Raleway&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    @vite(['resources/css/inicio.css'])
    </head>
    <body>
        <!--<div class="formuinicio">-->

            <h1>Inicia sesion o registrate</h1>
            <h4>Es gratis</h4>
            <div class="Formulario">
            <form>
                <label for="Nombre">Nombre</label>
                <input placeholder="Nombre" id="Nombre" name="Nombre>" type="text">
                <br>
                <label for="Apellido">Apellido</label>
                <input placeholder="Apellido" id="Apellido" name="Apellido" type="text">
                <br>

                <label for="Correo">Correo electronico</label>
                <input placeholder="Correo electronico" id="Correo" name="Correo" type="Email">
                <br>

                <label for="Usuario">Usuario</label>
                <input placeholder="Nombre de usuario" id="Usuario"  name="Usuario"  type="text">
                <br>
                 
                <label for="Nacimiento">Fecha de nacimiento</label>
                <input id="Nacimiento" name="Nacimiento" type="date">
            <a href="/homeland">
                <button type="button">Enviar</button>
            </a>

            </form>
        </div>
        <!--</div>-->
    </body>
</html>