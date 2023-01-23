<?php

$resultado = $_GET['resultado'] ?? null;
 require '../includes/functions.php';
 incluirTemplate('header');

?>

    <main class="container section">
        <h1>Administrador de Propiedades</h1>
        <?php if (intval($resultado) === 1): ?>
            <p class="alert exito">Anuncio creado correctamente</p>
          
        <?php endif; ?>
        <a href="/admin/propiedades/crear.php" class="button button-green">Nueva Propiedad</a>

        <table class="propiedades">
            <thead>
                <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Casa en la playa</td>
                    <td><img src="/imagenes/3e639a3d322271780791f22e42d8927c.png" class="imagen-tabla" alt=""></td>
                    <td>$4000000</td>
                    <td>
                        <a href="" class="button-rojo-block">Eliminar</a>
                        <a href="" class="button-yellow-block">Actualizar</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>

<?php 
    incluirTemplate('footer');