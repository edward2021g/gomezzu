<?php

        define('servidor','localhost:3307');
        define('nombre_bd','gomezzu');
        define('usuario','root');
        define('password','root');         
        
        try{
           $conexion = new PDO("mysql:host=".servidor.";dbname=".nombre_bd, usuario, password);            
            
            $conexion->query("SET NAMES 'UTF8'");
            $cadenaConsulta = "SELECT * FROM libros";
            $consulta = $conexion->prepare($cadenaConsulta);
            $consulta->execute();
    
        
        $conexion = null;
        }
        catch (Exception $e){
            die("El error de Conexión es :".$e->getMessage());
        }         
        ?>