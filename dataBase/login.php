<?php

$usuario = isset( $_POST["usuario"])?$_POST["usuario"] : "";
$pass = isset( $_POST["pass"])?$_POST["pass"] : "";
session_start();
$_SESSION['usuario'] = $usuario;

$server = "localhost";
$user = "root";
$password = "";
$database = "GauchoRocket";
$conn = new mysqli($server, $user, $password,$database);
if ($conn->connect_error) {
    die("Fallo la conexion: " . $conn->connect_error);
}
$sql = "SELECT * FROM Usuario WHERE email = '$usuario'AND contraseña = '$pass'";

$resultado =$conn->query($sql);
$filas=$resultado->fetch_array(MYSQLI_ASSOC);
 print_r($filas);
if($filas['id_cargo']==1){//administrador
    header('location:http://localhost:63342/GauchoRocket/gaucho/index.php');
}elseif ($filas['id_cargo']==2){//cliente
    header('Location:http://localhost:63342/GauchoRocket/gaucho/index.php');
}else{
    header('location:http://localhost:63342/GauchoRocket/gaucho/iniciarSesion.php');
}
$resultado->free_result();
$conn->close();




