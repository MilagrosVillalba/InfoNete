<?php
include('config.php');

function getConexion(){

    $config = getConfigFileAsArray();

    $servername = $config['database']['servername'];
    $username = $config['database']['username'];
    $dbname = $config['database']['dbname'];
    $password = $config['database']['password'];

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}

?>
