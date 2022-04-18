<?php
session_start();
$_SESSION=array();
session_destroy();
header("location: Taller2_Ejercicio1.php");
?>