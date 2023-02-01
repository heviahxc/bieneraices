<?php
define('TEMPLATES_URL',__DIR__ .'/templates');
define('FUNCTIONS_URL',__DIR__ .'/functions.php');

function incluirTemplate(string $nombre, bool $start = false){
    include  TEMPLATES_URL."/${nombre}.php";
}

function autenticacion(){
    session_start();

if (!$_SESSION['login']) {
        header('Location: /');

}
}
