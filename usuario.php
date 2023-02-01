<?php


require 'includes/config/database.php';
$db = conectarDB();

$email = "admin@admin.cl";
$password = "admin";

$passwordHash = password_hash($password, PASSWORD_BCRYPT);

$query = "INSERT INTO usuarios (email, password)VALUES ('${email}','${passwordHash}');";


mysqli_query($db, $query);