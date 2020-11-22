<?php

include_once '../Model/Conexion.php';
include '../Model/M_Login.php';
include '../vista/Confi_Postulante.php';

//session_start();

$Login = $_POST["Login"];
$Password = $_POST["Password"];

$obj=new Logear();
$obj->Login($Login,$Password);

?>



