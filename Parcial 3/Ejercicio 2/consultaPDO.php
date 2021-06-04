<?php

        define('servidor','localhost:3307');
        define('nombre_bd','gomezzu');
        define('usuario','root');
        define('password','root');         
        
        try{
           $conexion = new PDO("mysql:host=".servidor.";dbname=".nombre_bd, usuario, password);            
            
            $cadenaConsulta = "SELECT * FROM usuarios";
            $consulta = $conexion->prepare($cadenaConsulta);
            $consulta->execute();
    
            while($registro = $consulta->fetch()){
                echo $registro['id'].' || '.
                    $registro['usuario'].' || '.
                    $registro['password'].'<br>';
            }
            $consulta->closeCursor();
        
        $conexion = null;
        }
        catch (Exception $e){
            die("El error de Conexión es :".$e->getMessage());
        }         
        ?>