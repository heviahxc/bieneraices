<?php
require '../includes/app.php';
autenticacion();

use App\Propiedad;

$propiedades = Propiedad::all();


$resultado = $_GET['resultado'] ?? null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if ($id) {
        $query = "SELECT imagen FROM propiedad WHERE id_propiedad = ${id}";

        $resultado = mysqli_query($db, $query);
        $propiedad = mysqli_fetch_assoc($resultado);

        unlink('../imagenes/' . $propiedad['imagen']);

        $query = "DELETE FROM propiedad WHERE id_propiedad = ${id}";
        $resultado = mysqli_query($db, $query);
        
        if ($resultado) {
            header('Location: /admin?resultado=3');
        }
    }
}
 
 incluirTemplate('header');

?>

<main class="container section">
    <h1>Administrador de Propiedades</h1>
    <?php if (intval($resultado) === 1): ?>
    <p class="alert exito">Anuncio creado correctamente</p>
    <?php elseif (intval($resultado) === 2): ?>
    <p class="alert exito">Anuncio actualizado correctamente</p>
    <?php elseif (intval($resultado) === 3): ?>
    <p class="alert exito">Anuncio Eliminado correctamente</p>

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
            <?php foreach( $propiedades as $propiedad): ?>
            <tr>
                <td><?php echo $propiedad->id_propiedad; ?></td>
                <td><?php echo $propiedad->titulo; ?></td>
                <td><img src="/imagenes/<?php echo $propiedad->imagen; ?>" class="imagen-tabla" alt=""></td>
                <td><?php echo $propiedad->precio; ?></td>
                <td>
                    <form method="POST" class="w-100">

                        <input type="hidden" name="id" value="<?php echo $propiedad->id_propiedad; ?>">

                        <input type="submit" class="button-rojo-block" value="Eliminar">
                    </form>
                    <a href="admin/propiedades/actualizar.php?id=<?php echo $propiedad->id_propiedad; ?>"
                        class="button-yellow-block">Actualizar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>

<?php 
mysqli_close($db);
    incluirTemplate('footer');

    ?>