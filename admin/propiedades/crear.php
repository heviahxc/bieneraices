<?php

 require '../../includes/config/database.php';
 $db = conectarDB();


 require '../../includes/functions.php';
 incluirTemplate('header');

?>

    <main class="container section">
        <h1>Crear</h1>
        <a href="/admin" class="button button-green">Volver</a>

        <form class="form"> 
            <fieldset>

            
        <legend>Información General</legend>
        <label for="title">Título:</label>
        <input type="text" id="title" placeholder="Titulo Propiedad">

        <label for="price">Precio:</label>
        <input type="numbrer" id="price" placeholder="Precio Propiedad">

        <label for="image">Imagen:</label>
        <input type="file" id="image" accept="image/jpeg, image/png">

        <label for="desc">Descripcion:</label>
        <textarea name="desc" id="desc"></textarea>

        </fieldset>
        <fieldset>
            <legend>Información de la propiedad</legend>

         <label for="habitaciones">Habitaciones:</label>
        <input type="numbrer" id="habitaciones" placeholder="Ej: 3" min="1" max="9" >

        <label for="wc">Baños:</label>
        <input type="numbrer" id="wc" placeholder="Ej: 2" min="1" max="9" >

        <label for="estacionamientos">Estacionamientos:</label>
        <input type="numbrer" id="estacionamientos" placeholder="Ej: 1" min="1" max="9" >
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>

            <select>
                <option value="1">Juan</option>
                <option value="1">Karen</option>
            </select>
        </fieldset>

        <input type="submit" value="Crear Propiedad" class="button button-green">
         </form>

    </main>

<?php 
    incluirTemplate('footer');