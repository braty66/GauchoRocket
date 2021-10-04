<?php


$server = "localhost";
$user = "root";
$password = "";
$database = "GauchoRocket";
$conn = new mysqli($server, $user, $password,$database);
if ($conn->connect_error) {
    die("Fallo la conexion: " . $conn->connect_error);
}
echo "Conexión exitosa";

//Conexión
$stmt = $conn->prepare("INSERT INTO Usuario (nombre,
apellido,fechaNacimiento, email, contraseña) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param('sssss', $nombre, $apellido, $fechaNacimiento, $email,$pass);

$nombre =$_POST['nombre'];
$apellido =$_POST['apellido'];
$fechaNacimiento =$_POST['fecha'];
$email =$_POST['mail'];
$pass = md5($_POST['password']);
$stmt->execute();

$stmt->close();
$conn->close();