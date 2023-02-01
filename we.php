<?php

require 'includes/app.php';

    incluirTemplate('header');
?>

    <main class="container section">
        <h1>Conoce sobre Nosotros</h1>

        <div class="container-we">
            <div class="image">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img src="build/img/nosotros.jpg" alt="nosotros">
                </picture>
            </div>

            <div class="text-we">
                <blockquote>
                    25 años de experiencia
                </blockquote>
                <p>
                    Amet eu ipsum incididunt sunt sint ex voluptate ea commodo qui. Nulla esse irure aute id velit. 
                    Et amet tempor adipisicing irure non voluptate laboris cillum labore fugiat id exercitation incididunt.
                </p>
                <p>
                    Duis ad aliquip nostrud nulla nisi incididunt pariatur mollit eu proident quis sit et. 
                    Commodo sint aliquip ad tempor id duis dolor id veniam pariatur laboris eiusmod reprehenderit. 
                    Amet nulla magna quis reprehenderit eu. 
                    Deserunt sit magna minim ad voluptate ad magna dolore id do fugiat quis anim est. 
                    Pariatur est exercitation incididunt ad.
                </p>
            </div>
        </div>
    </main>
    <section class="container section">
        <h1>Más Sobre Nosotros</h1>
        <div class="icon-we">
            <div class="icon">
                <img src="build/img/icono1.svg" alt="segurity" loading="lazy">
                <h3>Seguridad</h3>
                <p>Pariatur laboris ipsum tempor non sunt id id ex. 
                    Aute quis elit in ea ad veniam velit dolore sunt nisi. 
                    Ut laboris duis velit excepteur eu in eu anim non tempor. 
                    Incididunt sit sunt eiusmod qui.</p>

            </div>

            <div class="icon">
                <img src="build/img/icono2.svg" alt="price" loading="lazy">
                <h3>Precio</h3>
                <p>Pariatur laboris ipsum tempor non sunt id id ex. 
                    Aute quis elit in ea ad veniam velit dolore sunt nisi. 
                    Ut laboris duis velit excepteur eu in eu anim non tempor. 
                    Incididunt sit sunt eiusmod qui.</p>

            </div>

            <div class="icon">
                <img src="build/img/icono3.svg" alt="time" loading="lazy">
                <h3>A tiempo</h3>
                <p>Pariatur laboris ipsum tempor non sunt id id ex. 
                    Aute quis elit in ea ad veniam velit dolore sunt nisi. 
                    Ut laboris duis velit excepteur eu in eu anim non tempor. 
                    Incididunt sit sunt eiusmod qui.</p>

            </div>

        </div>
    </section>

    <?php
    incluirTemplate('footer');
?>