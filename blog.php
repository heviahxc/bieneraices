<?php

require 'includes/app.php';

    incluirTemplate('header');
?>

    <main class="container section contents-center">
        <h1>Nuestro Blog</h1>
        
        <article class="entry-blog">
            <div class="image">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="text entry blog">
                </picture>
            </div>
            <div class="text-entry">
                <a href="entry.html">
                    <h4>Terraza techo</h4>
                    <p>Escrito el: <span>20/08/2022</span> por <span>Admin</span></p>
                </a>
                <p>
                    Ad sunt exercitation mollit incididunt. Amet pariatur commodo laboris Lorem. 
                    Lorem aliqua adipisicing sint consectetur nulla do sunt duis.
                </p>
            </div>
        </article>
        <article class="entry-blog">
            <div class="image">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="text entry blog">
                </picture>
            </div>
            <div class="text-entry">
                <a href="entry.html">
                    <h4>Terraza techo</h4>
                    <p>Escrito el: <span>18/08/2022</span> por <span>Admin</span></p>
                </a>
                <p>
                    Ad sunt exercitation mollit incididunt. Amet pariatur commodo laboris Lorem. 
                    Lorem aliqua adipisicing sint consectetur nulla do sunt duis.
                </p>
            </div>
        </article>
        <article class="entry-blog">
            <div class="image">
                <picture>
                    <source srcset="build/img/blog3.webp" type="image/webp">
                    <source srcset="build/img/blog3.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog3.jpg" alt="text entry blog">
                </picture>
            </div>
            <div class="text-entry">
                <a href="entry.html">
                    <h4>Decora tu living</h4>
                    <p>Escrito el: <span>17/08/2022</span> por <span>Admin</span></p>
                </a>
                <p>
                    Ad sunt exercitation mollit incididunt. Amet pariatur commodo laboris Lorem. 
                    Lorem aliqua adipisicing sint consectetur nulla do sunt duis.
                </p>
            </div>
        </article>

        <article class="entry-blog">
            <div class="image">
                <picture>
                    <source srcset="build/img/blog4.webp" type="image/webp">
                    <source srcset="build/img/blog4.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog4.jpg" alt="text entry blog">
                </picture>
            </div>
            <div class="text-entry">
                <a href="entry.html">
                    <h4>Decora tu dormitorio contents-center</h4>
                    <p>Escrito el: <span>17/08/2022</span> por <span>Admin</span></p>
                </a>
                <p>
                    Ad sunt exercitation mollit incididunt. Amet pariatur commodo laboris Lorem. 
                    Lorem aliqua adipisicing sint consectetur nulla do sunt duis.
                </p>
            </div>
        </article>
    </main>
    <?php
    incluirTemplate('footer');
?>