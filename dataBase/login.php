<?php

$usuario = isset( $_POST["usuario"])?$_POST["usuario"] : "";
$pass = isset( $_POST["pass"])?$_POST["pass"] : "";
session_start();


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
    $_SESSION['administrador'] = $usuario;
    header('location:http://localhost/GauchoRocket/gaucho/homeAdmin.php');
}elseif ($filas['id_cargo']==2){//cliente
    $_SESSION['cliente'] = $usuario;
    header('Location:http://localhost/GauchoRocket/gaucho/homeUsuario.php');
}else{

    header('location:http://localhost/GauchoRocket/gaucho/iniciarSesion.php');

}
$resultado->free_result();
$conn->close();




