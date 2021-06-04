<?php

$servidor = "localhost:3307";
$usuario = "root";
$contrasena = "root";
$base_datos = "gomezzu";

try
{
    $mbd = new PDO("mysql:host=".servidor.";dbname=".nombre_bd, usuario, password); 
    foreach($mbd->query("SELECT * FROM usuarios") as $fila) {
        print_r($fila);
        print_r("\n");
    }
    $mbd = null;
}catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>