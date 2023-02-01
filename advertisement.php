<?php
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if(!$id){
    header('Location: /');
}

require 'includes/app.php';
$db = conectarDB();

$query = "SELECT * FROM propiedad where ${id}";

$resultado = mysqli_query($db, $query);




    incluirTemplate('header');
?>
    <?php if($propiedad = mysqli_fetch_assoc($resultado)): ?>
    <main class="container section contents-center">
            <h2><?php echo $propiedad['titulo'] ?></h2>
        
         
                <img loading="Lazy" width="200" height="300" src="/imagenes/<?php echo $propiedad['imagen'] ?>" alt="destacada">
      
            <div class="abstract-property">
                <p class="price"><?php echo $propiedad['precio'] ?></p>
                <ul class="icons-features">
                    <li>
                        <img class="icon" loading="lazy" src="build/img/icono_wc.svg" alt="wc">
                        <p><?php echo $propiedad['wc'] ?></p>
                    </li>
                    <li>
                        <img class="icon" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="wc">
                        <p><?php echo $propiedad['estacionamientos'] ?></p>
                    </li>
                    <li>
                        <img class="icon" loading="lazy" src="build/img/icono_dormitorio.svg" alt="wc">
                        <p><?php echo $propiedad['habitaciones'] ?></p>
                    </li>
                 </ul>

                 <p><?php echo $propiedad['descripcion'] ?></p>
            </div>
            <?php endif; ?>
    </main>

    <?php
    incluirTemplate('footer');
?>