<?php

require 'includes/functions.php';

    incluirTemplate('header');
?>

<main class="container section">
    <section class="seccion container">
        <h2>Casas y Departamentos en Ventas</h2>
        <?php
    $limite = 10;
        include 'includes/templates/anuncio.php' 
         ?>
</main>

<?php
    incluirTemplate('footer');
?>