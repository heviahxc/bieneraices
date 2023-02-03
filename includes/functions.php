<?php
define('TEMPLATES_URL',__DIR__ .'/templates');
define('FUNCTIONS_URL',__DIR__ .'/functions.php');
define('CARPETA_IMAGENES', __DIR__ . '/../imagenes/');

function incluirTemplate(string $nombre, bool $start = false){
    include  TEMPLATES_URL."/${nombre}.php";
}

function autenticacion(){
    session_start();

if (!$_SESSION['login']) {
        header('Location: /');

}
}

function s($html) : string{
    $s = htmlspecialchars($html);
    return $s;
}
