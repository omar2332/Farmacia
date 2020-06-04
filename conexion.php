<?php

$usuario = 'root';
$contraseña = 'root';

try {
    $mbd = new PDO('mysql:host=localhost:3307;dbname=farmacia', $usuario, $contraseña);
    
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>