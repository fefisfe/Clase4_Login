<?php
$usuario = $_POST ["usuario"];
$contrasenia =$_POST["pass"];

$ckusuario = "admin";
$ckpass = "12345";

if ($usuario == $ckusuario && $contrasenia == $ckpass) {
    header ("location:https://fefisfe.github.io/proyectoHerreria/");
}else {
    header ("location:https://www.gog.com/error/404");
}

?>