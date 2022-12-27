<?php

require 'includes/functions.php';

    incluirTemplate('header');
?>

    <main class="container section contents-center">
            <h2>Casa de Lujo en el Lago</h2>
        
            <picture>
                <source srcset="build/img/destacada.avif" type="image/avif">
                <source srcset="build/img/destacada.webp" type="image/webp">
                <img loading="Lazy" width="200" height="300" src="build/img/destacada.jpg" alt="destacada">
            </picture>

            <div class="abstract-property">
                <p class="price">$400.000.000</p>
                <ul class="icons-features">
                    <li>
                        <img class="icon" loading="lazy" src="build/img/icono_wc.svg" alt="wc">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icon" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="wc">
                        <p>2</p>
                    </li>
                    <li>
                        <img class="icon" loading="lazy" src="build/img/icono_dormitorio.svg" alt="wc">
                        <p>4</p>
                    </li>
                 </ul>

                 <p>Sit ut aliqua dolor deserunt laboris aute sint culpa non amet officia qui velit pariatur. 
                    Irure excepteur officia elit commodo labore labore deserunt reprehenderit aliquip. 
                    Do do magna anim nisi.</p>
                    <p>Magna consequat labore proident consectetur ad proident deserunt occaecat. 
                        Cillum minim dolor occaecat elit Lorem. Do reprehenderit incididunt pariatur consequat nisi.
                         Labore pariatur voluptate adipisicing consectetur nostrud do non sint deserunt. 
                         Proident exercitation consequat enim excepteur id aute.
                          Cupidatat incididunt incididunt minim id ut aute aliqua. 
                          Amet adipisicing elit non aliqua ipsum culpa do amet tempor est deserunt laborum.</p>
            </div>
            
    </main>

    <?php
    incluirTemplate('footer');
?>