<html>
    <head>
        @vite(['resources/css/inicio.css'])
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Raleway&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@600&display=swap" rel="stylesheet">
    </head>
    <body>
    <div
    <form action="Servidor que registra el login.php" method="post">
        <!--Indicar la accion quqe realiza el form y adonde envia a los datos que se guarden-->
        <br>
        <!--Nombre, especificando el id y el nombre del dato que se envia-->
        <label for="Nombre">Nombre</label>
        <input  type="text" id="Nombre" name="Nombre"/>
        <br>
        <!--Lo mismo pero con apellido y correo, pueden ser tipo texto, email o contrasenia-->
        <label>Apellido:</label>
        <input type="Text" id="Apellido" name="Apellido" placeholder="Apellido"/>
        <br>
        <!--Los placeholders son solo para indicar que poner en el formulario, asi como el "Escribe un mensaje de wpp"-->
        <label for="Correo" id="Correo" name="Correo">Correo electronico</label>
        <input placeholder="Correo electronico"type="Email"/><br>
        <label for="Contra" id="Contrasenia" name="Contra">Contrasenia</label>
        <input placeholder="contrasenia" type="password"/>
        <!--Boton del tipo submit, que es la accion que envia todos los datos introducidos al servidor-->
        <button type="submit">Registrarse</button>
      
    </body>
</html>