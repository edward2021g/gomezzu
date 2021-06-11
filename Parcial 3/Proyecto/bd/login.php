<?php
session_start();

include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

//print_r($conexion);

//recepción de datos enviados mediante POST desde ajax
$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';

$pass = md5($password); //encriptacion 

$consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$pass' ";
$resultado = $conexion->prepare($consulta);
$resultado->execute();

if($resultado->rowCount() >= 1){
    $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["s_usuario"] = $usuario;
}else{
    $_SESSION["s_usuario"] = null;
    $data=null;
}

print json_encode($data);
$conexion=null;

//usuarios de pruebaen la base de datos
//usuario:admin pass:admin
//usuario:demo pass:demo
//usuario:jose pass:gomez

//INSERT INTO usuarios (usuario, password) VALUES ('admin', MD5('admin'));
//INSERT INTO usuarios (usuario, password) VALUES ('demo', MD5('demo'));
//INSERT INTO usuarios (usuario, password) VALUES ('jose', MD5('gomez'));