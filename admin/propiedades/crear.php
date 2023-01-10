<?php

 require '../../includes/config/database.php';
 $db = conectarDB();
 $consulta = "SELECT * FROM VENDEDORES";
 $resultado = mysqli_query($db,$consulta);
 $errores = [];

 $title = '';
 $precio = '';
 $descripcion = '';
 $habitaciones = '';
 $wc = '';
 $estacionamientos = '';
 $vendedorId = '';
 

 require '../../includes/functions.php';
 incluirTemplate('header');

 if($_SERVER ['REQUEST_METHOD'] === 'POST'){
    //echo "<pre>";
    //var_dump ($_POST);
    //echo "</prev>";
    $title = $_POST['title'];
    $precio = $_POST['price'];
    $descripcion = $_POST['desc'];
    $habitaciones = $_POST['habitaciones'];
    $wc = $_POST['wc'];
    $estacionamientos = $_POST['estacionamientos'];
    $vendedorId = $_POST['vendedor'];
    $creado = date('Y/m/d');

    if(!$title){
        $errores[] = "Debes añadir un titulo";
    }

    if(!$precio){
        $errores[] = "Debes añadir un precio";
    }

    if(strlen($descripcion) < 50){
        $errores[] = "Debes añadir una descripcion de al menos 50 caracteres";
    }

    if(!$habitaciones){
        $errores[] = "Debes añadir numero de habitaciones";
    }

    if(!$wc){
        $errores[] = "Debes añadir numero de baños";
    }

    if(!$estacionamientos){
        $errores[] = "Debes añadir numero de estacionamientos";
    }

    if(!$vendedorId){
        $errores[] = "Debes elegir un vendedor";
    }

    
    if(empty($errores)){
        $query = " INSERT INTO propiedad (titulo, precio, descripcion, habitaciones, wc , estacionamientos, creado, id_vendedor)
        VALUES ('$title', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamientos', '$creado' ,'$vendedorId')";
    
       // echo $query;
    
       $result = mysqli_query($db, $query);

        if ($result) {
           
            header('Location: /admin');
        }

    }
 
 }

?>

    <main class="container section">
        <h1>Crear</h1>
        <a href="/admin" class="button button-green">Volver</a>
        
        <?php foreach($errores as $error): ?>
            <div class="alert error">
                <?php echo $error ?>
            </div>
            <?php endforeach ?>
        <form class="form" method="POST" action="/admin/propiedades/crear.php"> 
            <fieldset>

            
        <legend>Información General</legend>
        <label for="title">Título:</label>
        <input type="text" id="title" name="title" placeholder="Titulo Propiedad" value="<?php echo $title;?>">

        <label for="price">Precio:</label>
        <input type="numbrer" id="price" name="price" placeholder="Precio Propiedad" value="<?php echo $precio;?>">

        <label for="image">Imagen:</label>
        <input type="file" id="image" name="image" accept="image/jpeg, image/png" >

        <label for="desc">Descripcion:</label>
        <textarea name="desc" id="desc"><?php echo $descripcion;?></textarea>

        </fieldset>
        <fieldset>
            <legend>Información de la propiedad</legend>

         <label for="habitaciones">Habitaciones:</label>
        <input type="numbrer" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9" value="<?php echo $habitaciones;?>">

        <label for="wc">Baños:</label>
        <input type="numbrer" id="wc" name="wc" placeholder="Ej: 2" min="1" max="9" value="<?php echo $wc;?>">

        <label for="estacionamientos">Estacionamientos:</label>
        <input type="numbrer" id="estacionamientos" name="estacionamientos" placeholder="Ej: 1" min="1" max="9" value="<?php echo $estacionamientos;?>">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>

            <select name="vendedor"> 
                <option value="">-- Seleccione --</option>
                <?php while($vendedor = mysqli_fetch_assoc($resultado)): ?>
                    <option <?php echo $vendedorId === $vendedor['id_vendedor'] ? 'selected' : ''; ?> value="<?php echo $vendedor['id_vendedor'] ?>"><?php echo $vendedor['NOMBRE']." ".$vendedor['APELLIDO']; ?></option>
                <?php endwhile; ?>
            </select>
        </fieldset>

        <input type="submit" value="Crear Propiedad" class="button button-green">
         </form>

    </main>

<?php 
    incluirTemplate('footer');