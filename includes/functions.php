<?php
require 'app.php';
function incluirTemplate(string $nombre, bool $start = false){
    include  TEMPLATES_URL."/${nombre}.php";
}

function autenticacion() : bool{
    session_start();

$auth = $_SESSION['login'];

if ($auth) {
   return true;

}
return false;
}
