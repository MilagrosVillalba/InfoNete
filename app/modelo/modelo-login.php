<?php

login();
function login(){
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];

if ($usuario == "infonete" && $contraseña == "1234"){
    session_start();
    $_SESSION["usuario"] = $usuario;
    header("Location: ../interno.php");
    exit();
}
header("Location: ../index.php");
exit();

}