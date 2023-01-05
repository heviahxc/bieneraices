<?php

 require '../../includes/config/database.php';
 $db = conectarDB();

 $errores = [];

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
    $vendedor = $_POST['vendedor'];

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

    if(!$vendedor){
        $errores[] = "Debes elegir un vendedor";
    }

    
    if(empty($errores)){
        $query = " INSERT INTO propiedad (titulo, precio, descripcion, habitaciones, wc , estacionamientos, id_vendedor)
        VALUES ('$title', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamientos' ,'$vendedor')";
    
       // echo $query;
    
       $result = mysqli_query($db, $query);
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
        <input type="text" id="title" name="title" placeholder="Titulo Propiedad">

        <label for="price">Precio:</label>
        <input type="numbrer" id="price" name="price" placeholder="Precio Propiedad">

        <label for="image">Imagen:</label>
        <input type="file" id="image" name="image" accept="image/jpeg, image/png">

        <label for="desc">Descripcion:</label>
        <textarea name="desc" id="desc"></textarea>

        </fieldset>
        <fieldset>
            <legend>Información de la propiedad</legend>

         <label for="habitaciones">Habitaciones:</label>
        <input type="numbrer" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9" >

        <label for="wc">Baños:</label>
        <input type="numbrer" id="wc" name="wc" placeholder="Ej: 2" min="1" max="9" >

        <label for="estacionamientos">Estacionamientos:</label>
        <input type="numbrer" id="estacionamientos" name="estacionamientos" placeholder="Ej: 1" min="1" max="9" >
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>

            <select name="vendedor">
                <option value="">-- Seleccione --</option>
                <option value="1">Juan</option>
                <option value="1">Karen</option>
            </select>
        </fieldset>

        <input type="submit" value="Crear Propiedad" class="button button-green">
         </form>

    </main>

<?php 
    incluirTemplate('footer');