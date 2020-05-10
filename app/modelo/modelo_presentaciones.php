<?php
include("conexion.php");

function getPresentaciones()
{

    $conn = getConexion();
    $sql = "SELECT * FROM presentaciones";
    return execute_query($conn, $sql);

}
function execute_query($conn, $sql){
    $result = mysqli_query($conn, $sql);
    $presentaciones = Array();

    if (mysqli_num_rows($result) > 0) {

        while($row = mysqli_fetch_assoc($result)) {
            $presentacion = Array();
            $presentacion['idPresentacion'] =  $row["idPresentacion"];
            $presentacion['nombre'] =  $row["nombre"];
            $presentacion['fecha'] =  $row["fecha"];
            $presentacion['precio'] =  $row["precio"];
            $presentaciones[] = $presentacion;
        }
    }
    mysqli_close($conn);
    return $presentaciones;
}
?>
