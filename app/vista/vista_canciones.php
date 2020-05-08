<h2 class="w3-wide">Canciones</h2>
<table class="w3-table">
    <tr>
        <th>Cancion</th>
        <th>duracion</th>
        <th>reproducir</th>
    </tr>

    <?php
    foreach ( $canciones as $cancion){
        echo   "<tr>
                        <td>" . $cancion['nombre'] . "</td>
                        <td>" . $cancion['duracion'] . "</td>
                        <td> Reproducir </td>
                    </tr>";
    }
    ?>
</table>
</div>

