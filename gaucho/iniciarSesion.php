<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/2b2506e7ac.js" crossorigin="anonymous"></script>
    <title>Iniciar Sesion</title>
</head>
<body>
<?php
   include './view/header.php'

?>

<div id="iniciarSesion" class="w3-card-4 w3-center w3-margin">
    <div class="w3-container w3-blue ">
        <h3>Iniciar Sesión</h3>
    </div>
    <div class="w3-container">
    <form  method="post" name="login" action="../dataBase/login.php">
        <label for="usuario">Usuario</label>
        <input class="w3-input" type="email" name="usuario" id="usuario">
        <label for="password">Contraseña</label>
        <input class="w3-input w3-margin-bottom" type="password" name="password" id="password">
        <button class="w3-button w3-blue w3-margin" >Ingresar</button>
    </form>
        <a href="http://localhost:63342/GauchoRocket/gaucho/registro.php">registrarme</a>
        <a href="">recuperar contraseña</a>
    </div>
</div>
</body>
</html>
