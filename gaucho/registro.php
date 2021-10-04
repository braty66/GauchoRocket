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
    <title>Registrarme</title>
</head>
<body>
<?php
include './view/header.php'
?>
<h3>Ingresar los campos requeridos</h3>
<form class="w3-margin" method="post" action="../dataBase/registrarUsuario.php" name="registro">
    <label for="nombre">Nombre:</label>
    <input class="w3-input" type="text" name="nombre" id="nombre">
    <label for="apellido">Apellido</label>
    <input  class="w3-input" type="text" name="apellido" id="apellido">
    <label for="fecha">Fecha de Nacimiento:</label>
    <input class="w3-input" type="date" name="fecha" id="fecha" min="1950-01-01" max="2018-12-31">
    <label for="mail">Email</label>
    <input class="w3-input" type="email" name="mail" id="mail">
    <label for="password">Password</label>
    <input class="w3-input" type="password" name="password" id="password">
    <label for="confirmacion">Reingresá el password</label>
    <input class="w3-input" type="password" name="confirmacion" id="confirmacion">
    <button class="w3-button w3-blue w3-margin" >Registrar</button>
</form>
</body>
</html>
