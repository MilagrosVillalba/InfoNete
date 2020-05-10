<?php
session_start();

if (!isset($_SESSION["usuario"])){
    echo "no pasó x el login";
    exit();
}
echo $_SESSION["usuario"];