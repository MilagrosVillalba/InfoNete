<?php

/*var_dump($SERVER);
die();*/

include_once("header.html");

/* ---- cambiar controlador según corresponda ---- */
if( isset($_GET['pag']) && $_GET['pag'] == "canciones"){
    include("controlador/controlador_canciones.php");
}
if( isset($_GET['pag']) && $_GET['pag'] == "presentaciones"){
    include("controlador/controlador_presentaciones.php");
}
if( isset($_GET['pag']) && $_GET['pag'] == "labanda"){
    include("controlador/controlador_labanda.php");
}

include_once("footer.html");

?>