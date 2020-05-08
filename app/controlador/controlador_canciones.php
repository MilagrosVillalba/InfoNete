<?php
include("modelo/modelo_canciones.php");

$canciones = getCanciones();

include("vista/vista_canciones.php");


