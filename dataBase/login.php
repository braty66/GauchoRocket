<?php


session_start();
$usuario = isset( $_POST["usuario"])?$_POST["usuario"] : "";
$pass = isset( $_POST["pass"])?$_POST["pass"] : "";

$server = "localhost";
$user = "root";
$password = "";
$database = "GauchoRocket";
$conn = new mysqli($server, $user, $password,$database);
if ($conn->connect_error) {
    die("Fallo la conexion: " . $conn->connect_error);
}
$sql = "SELECT email, contraseña,nombre FROM Usuario WHERE email = '$usuario'AND contraseña = '$pass'";

$result = $conn->query($sql);
$count = mysqli_num_rows($result);

if ($count == 1){
    $_SESSION["usuario"] = $usuario;
    header("Location:http://localhost:63342/GauchoRocket/gaucho/index.php");
    exit();
}else{
    header("Location:http://localhost:63342/GauchoRocket/gaucho/iniciarSesion.php");
    exit();
}

$conn->close();


