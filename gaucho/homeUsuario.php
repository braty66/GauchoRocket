<?php
session_start();
$sesion=$_SESSION['cliente'];
if($sesion==null ||$sesion =''){
    echo 'no tiene acceso';
    die();
}
include './view/headerSessionAbierta.php'
?>

<div class="bgimg-1 w3-display-container">

    <h1 class="w3-text-white w3-display-left">Bienvenido Usuario</h1>

</div>

<?php
include './view/footer.php'
?>

