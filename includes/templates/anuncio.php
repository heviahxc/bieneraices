<?php

require __DIR__ . '/../config/database.php';
$db = conectarDB();

$query = "SELECT * FROM propiedad LIMIT ${limite}";

$resultado = mysqli_query($db, $query);

?>
<div class="container-advertisements">
    <?php  while($propiedad = mysqli_fetch_assoc($resultado)): ?>
    <div class="advertisements">
     
          
            <img loading="lazy" src="/imagenes/<?php echo $propiedad['imagen'] ;?>" alt="advertisements">


        <div class="contents-advertisements">
            <h3><?php echo $propiedad['titulo'] ;?>Casa de Lujo en el Lago</h3>
            <p><?php echo $propiedad['descripcion'] ;?>
            </p>
            <p class="price"><?php echo $propiedad['precio'] ;?></p>
            <ul class="icons-features">
                <li>
                    <img class="icon" loading="lazy" src="build/img/icono_wc.svg" alt="wc">
                    <p><?php echo $propiedad['wc'] ;?></p>
                </li>
                <li>
                    <img class="icon" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="wc">
                    <p><?php echo $propiedad['estacionamientos'] ;?></p>
                </li>
                <li>
                    <img class="icon" loading="lazy" src="build/img/icono_dormitorio.svg" alt="wc">
                    <p><?php echo $propiedad['habitaciones'] ;?></p>
                </li>
            </ul>

            <a href="advertisement.php?id=<?php echo $propiedad['id_propiedad'] ;?>" class="button-yellow-block">Ver Propiedad</a>
        </div>
    </div>
    <?php endwhile; ?>

</div>

<?php
 mysqli_close($db);
?>