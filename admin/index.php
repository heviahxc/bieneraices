<?php


require '../includes/config/database.php';
$db = conectarDB();




//Obtener vendedores
$query = "SELECT * FROM propiedad";
$resultadoConsulta = mysqli_query($db, $query);
$resultado = $_GET['resultado'] ?? null;
 require '../includes/functions.php';
 incluirTemplate('header');

?>

    <main class="container section">
        <h1>Administrador de Propiedades</h1>
        <?php if (intval($resultado) === 1): ?>
            <p class="alert exito">Anuncio creado correctamente</p>
        <?php elseif (intval($resultado) === 2): ?>
            <p class="alert exito">Anuncio actualizado correctamente</p>
        
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
                <?php while ($propiedad = mysqli_fetch_assoc($resultadoConsulta)): ?>
                <tr>
                    <td><?php echo $propiedad['id_propiedad']; ?></td>
                    <td><?php echo $propiedad['titulo']; ?></td>
                    <td><img src="/imagenes/<?php echo $propiedad['imagen']; ?>" class="imagen-tabla" alt=""></td>
                    <td><?php echo $propiedad['precio']; ?></td>
                    <td>
                        <a href="" class="button-rojo-block">Eliminar</a>
                        <a href="propiedades/actualizar.php?id=<?php echo $propiedad['id_propiedad']; ?>" 
                        class="button-yellow-block">Actualizar</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </main>

<?php 
mysqli_close($db);
    incluirTemplate('footer');

    ?>