<?php

include_once '../Model/Conexion.php';
include '../Model/M_LoginE.php';

//session_start();

$Login = $_POST["Login"];
$Password = $_POST["Password"];

$obj=new Logear();
$obj->Login($Login,$Password);


//header("Location: ../vista/V_Usuarios.php");


?>



