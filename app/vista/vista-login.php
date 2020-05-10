<?php include("../head.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <link rel="stylesheet" href="../public/css/estilos-login.css">
<body>
<a class="btn btn-info" href="../index.php">Volver</a>

<div class="container">
        <h2>Inicie Sesion</h2>

        <form action="../modelo/modelo-login.php" method="POST">
            <div class="form-group">
                <label for="email">Usuario:</label>
                <input type="text" class="form-control" id="usuario" name="usuario">
            </div>
            <div class="form-group">
                <label for="pwd">Contraseña:</label>
                <input type="password" class="form-control" id="contraseña" name="contraseña">
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="recordarme"> Recordarme
                </label>
            </div>
            <button type="submit" class="btn btn-info">Enviar</button>
        </form>
    </div>
</body>
