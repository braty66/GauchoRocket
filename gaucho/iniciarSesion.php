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
<div class="bgimg-1 w3-container">


    <div id="iniciarSesion" class="w3-card-4 w3-auto w3-margin w3-white w3-display-middle">
    <div class="w3-container w3-black ">
        <h3>Iniciar Sesión</h3>
    </div>
    <div class="w3-container">
    <form   method="post" name="login" action="../dataBase/login.php">
        <label for="usuario">Usuario</label>
        <input class="w3-input" type="email" name="usuario" id="usuario">
        <label for="password">Contraseña</label>
        <input class="w3-input w3-margin-bottom" type="password" name="pass" id="password">
        <button class="w3-button w3-black w3-margin" >Ingresar</button>
    </form>
        <a class="w3-text-black w3-small w3-hover-black" href="http://localhost/GauchoRocket/gaucho/registro.php">registrarme</a>
        <a class="w3-text-black w3-small w3-hover-black" href="">recuperar contraseña</a>
    </div>
</div>
    </div>
<?php
include './view/footer.php'
?>

</body>
</html>
