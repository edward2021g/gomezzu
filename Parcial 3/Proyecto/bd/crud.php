<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$ID = (isset($_POST['ID'])) ? $_POST['ID'] : '';
$Titulo = (isset($_POST['Titulo'])) ? $_POST['Titulo'] : '';
$Autor = (isset($_POST['Autor'])) ? $_POST['Autor'] : '';
$Editorial = (isset($_POST['Editorial'])) ? $_POST['Editorial'] : '';
$Paginas = (isset($_POST['Paginas'])) ? $_POST['Paginas'] : '';
$Anio_Publicacion = (isset($_POST['Anio_Publicacion'])) ? $_POST['Anio_Publicacion'] : '';

$Ubicacion = (isset($_POST['Ubicacion'])) ? $_POST['Ubicacion'] : '';
$Formato = (isset($_POST['Formato'])) ? $_POST['Formato'] : '';
$Genero = (isset($_POST['Genero'])) ? $_POST['Genero'] : '';
$Cometarios = (isset($_POST['Cometarios'])) ? $_POST['Cometarios'] : '';


$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$ID = (isset($_POST['ID'])) ? $_POST['ID'] : '';


switch($opcion){
    case 1:
        $consulta = "INSERT INTO libros (ID, Titulo, Autor, Editorial, Paginas, Anio_Publicacion, Ubicacion, Formato, Genero, Cometarios) VALUES('$ID', '$Titulo', '$Autor', '$Editorial', '$Paginas', '$Anio_Publicacion', '$Ubicacion', '$Formato', '$Genero', '$Cometarios') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        
        $consulta = "SELECT * FROM libros ORDER BY ID DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
        break;    
    case 2:        
        $consulta = "UPDATE libros SET ID='$ID', Titulo='$Titulo', Autor='$Autor', Editorial='$Editorial', Paginas='$Paginas', Anio_Publicacion='$Anio_Publicacion', Ubicacion='$Ubicacion', Formato='$Formato', Genero='$Genero', Cometarios = '$Cometarios' WHERE ID='$ID' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT * FROM libros WHERE ID='$ID' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:        
        $consulta = "DELETE FROM libros WHERE ID='$ID' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;
    case 4:    
        $consulta = "SELECT * FROM libros";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;