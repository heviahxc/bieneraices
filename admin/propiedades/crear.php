<?php
require '../../includes/app.php';

use App\Propiedad;
use Intervention\Image\ImageManagerStatic as Image;

autenticacion();

$db = conectarDB();

$propiedad = new Propiedad();

$consulta = "SELECT * FROM VENDEDORES";
$resultado = mysqli_query($db, $consulta);
$errores = Propiedad::getErrores();

incluirTemplate('header');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $propiedad = new Propiedad($_POST);

    $carpetaImagenes = '../../imagenes/';

    

    $nombreImagen = md5(uniqid(rand(), true)) . ".png";


    if($_FILES['imagen']['tmp_name']){
        $image = Image::make($_FILES['imagen']['tmp_name'])->fit(800, 600);
        $propiedad->setImagen($nombreImagen);
    }
   

    $errores = $propiedad->validar();


    if (empty($errores)) {

        if (!is_dir(CARPETA_IMAGENES)) {
            mkdir(CARPETA_IMAGENES);
            }

        $image->save(CARPETA_IMAGENES . $nombreImagen);
        $result = $propiedad->save();


        if ($result) {

            header('Location: /admin?resultado=1');
        }
    }
}

?>

<main class="container section">
    <h1>Crear</h1>
    <a href="/admin" class="button button-green">Volver</a>

    <?php foreach ($errores as $error) : ?>
        <div class="alert error">
            <?php echo $error ?>
        </div>
    <?php endforeach ?>
    <form class="form" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
        <?php include '../../includes/templates/formulario_propiedades.php'?>

        <input type="submit" value="Crear Propiedad" class="button button-green">
    </form>

</main>

<?php
incluirTemplate('footer');
