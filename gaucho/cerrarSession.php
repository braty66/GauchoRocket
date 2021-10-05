<?php
session_start();
session_destroy();
header("http://localhost/GauchoRocket/gaucho/index.php");
