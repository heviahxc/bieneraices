<?php

require 'includes/functions.php';

    incluirTemplate('header');
?>

    <main class="container section contents-center">
        <h1>Contacto</h1>
        <img src="build/img/destacada3.jpg" alt="des">


        <h2>Llene el formulario de contacto</h2>

        <form class="form" action="">
            <fieldset>
                <legend>Información Personal</legend>
                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tu Nombre" id="nombre">

                <label for="email">Email</label>
                <input type="email" placeholder="Tu Email" id="email">

                <label for="telefono">Teléfono</label>
                <input type="tel" placeholder="Tu Teléfono" id="telefono">

                <label for="mensaje">Nombre</label>
                <textarea id="mensaje" cols="30" rows="10"></textarea>
            </fieldset>

            <fieldset>
                <legend>Información sobre la Propiedad</legend>
                <label for="opciones">Vende o compra</label>
                <select id="opciones">
                    <option value="" disabled selected>Selecciona</option>
                    <option value="compra">Compra</option>
                    <option value="compra">Vende</option>
                </select>
                <label for="presupuesto">Precio o presupuesto</label>
                <input type="number" placeholder="Tu precio o presupuesto" id="presupuesto">
            </fieldset>

            <fieldset>
                <legend>Contacto</legend>
                <p>Como desea ser contactado?</p>
                <div class="contacto-rb">
                    <label for="contact-tel">Teléfono</label>
                    <input name="contacto" type="radio" value="telefono" id="contact-tel">

                    <label for="contact-email">Email</label>
                    <input name="contacto" type="radio" value="email" id="contact-email">
                </div>
                <p>Si eligió teléfono, elija la fecha y hora</p>
                <label for="fecha">Teléfono</label>
                <input type="date" id="fecha">

                <label for="hora">Hora</label>
                <input type="time" id="hora" min="09:00" max="18:00">
            </fieldset>

            <input type="submit" value="Enviar" class="button-green">
        </form>
    </main>
    <?php
    incluirTemplate('footer');
?>