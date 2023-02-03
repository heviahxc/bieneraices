<fieldset>


            <legend>Información General</legend>
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php s($propiedad->titulo); ?>">

            <label for="precio">Precio:</label>
            <input type="numbrer" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php s($propiedad->precio); ?>">

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png">

            <label for="descripcion">Descripcion:</label>
            <textarea name="descripcion" id="descripcion"><?php s($propiedad->descripcion); ?></textarea>

        </fieldset>
        <fieldset>
            <legend>Información de la propiedad</legend>

            <label for="habitaciones">Habitaciones:</label>
            <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9" value="<?php s($propiedad->habitaciones); ?>">

            <label for="wc">Baños:</label>
            <input type="number" id="wc" name="wc" placeholder="Ej: 2" min="1" max="9" value="<?php echo s($wc); ?>">

            <label for="estacionamientos">Estacionamientos:</label>
            <input type="number" id="estacionamientos" name="estacionamientos" placeholder="Ej: 1" min="1" max="9" value="<?php s($propiedad->estacionamientos); ?>">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>

        </fieldset>