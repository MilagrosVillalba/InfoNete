<?php
include ("head.php");
include_once("header.php");

/* ---- cambiar controlador según corresponda ---- */
if( isset($_GET['pag']) && $_GET['pag'] == "login"){
    include("controlador/controlador_login.php");
}


include_once("footer.php");

?>