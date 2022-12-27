<?php
require 'app.php';
function incluirTemplate(string $nombre, bool $start = false){
    include  TEMPLATES_URL."/${nombre}.php";
}