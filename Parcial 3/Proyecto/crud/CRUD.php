<?php
session_start();

if($_SESSION["s_usuario"] === null){
    header("Location: ../index.php");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />  
    <title>CRUD</title>
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="main.css">  
      
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="../assets/datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="../assets/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">    
      
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">  
  </head>
    
  <body> 
        <div class="container">
            <div class="row">
                <div class="col-lg-20">
                    <div class="jumbotron">
                        
                      <h1 class="display-4 text-center">¡Bienvenido al sistema!</h1>
                      <h2 class="text-center">Usuario: <span class="badge badge-primary"><?php echo $_SESSION["s_usuario"];?></span></h2>    
                      <p class="lead text-center">Esta es la página donde podras administrar todos los libros.</p>
                          

                            <!--   Inicio tabla -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">            
                                    <button id="btnNuevo" type="button" class="btn btn-primary" data-toggle="modal"> Agregar libro </button> 
                                    </div>    
                                </div>    
                            </div>    

                            <div class="container caja">
                                <div class="row">
                                    <div class="col-lg-12"> 
                                    <div class="table-responsive">        
                                        <table id="tablaLibros" class="table table-striped table-bordered table-condensed" style="width:100%" >
                                            <thead class="text-center">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Título</th>
                                                    <th>Autor</th>                                
                                                    <th>Editorial</th>  
                                                    <th>Páginas</th>
                                                    <th>Año Pub</th>
                                                    <th>Ubicación</th>
                                                    <th>Formato</th>
                                                    <th>Género</th>
                                                    <th>Cometarios</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>                           
                                            </tbody>        
                                        </table>               
                                    </div>
                                    </div>
                                </div>  
                            </div>   

                        <!--Modal para CRUD-->
                        <div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    </div>

                                    <form id="formLibros">    
                                        <div class="modal-body">
                                            <div class="row"> <!-- Renglon 1 -->
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label for="" class="col-form-label">ID:</label>
                                                        <input type="number" class="form-control" id="ID">
                                                    </div>
                                                </div>

                                                <div class="col-lg-9">
                                                    <div class="form-group">
                                                        <label for="" class="col-form-label">Titulo</label>
                                                        <input type="text" class="form-control" id="Titulo">
                                                    </div> 
                                                </div>    
                                            </div>

                                            <div class="row"> <!-- Renglon 2 -->
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="" class="col-form-label">Autor</label>
                                                        <input type="text" class="form-control" id="Autor">
                                                    </div>               
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="" class="col-form-label">Editorial</label>
                                                        <input type="text" class="form-control" id="Editorial">
                                                    </div>
                                                </div>  
                                            </div>

                                            <div class="row"> <!-- Renglon 3 -->
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label for="" class="col-form-label">Paginas</label>
                                                        <input type="number" min="1" pattern="^[0-9]+" class="form-control" id="Paginas">
                                                    </div>
                                                </div>    
                                                <div class="col-lg-3">    
                                                    <div class="form-group">
                                                        <label for="" class="col-form-label">Año Publi.</label>
                                                        <input type="number" min="1800" max="2021" class="form-control" id="Anio_Publicacion">
                                                    </div>            
                                                </div>  

                                                <!-- Diferentes opciones de ubicacion -->
                                                <div class="col-lg-3">    
                                                    <div class="form-group">
                                                        <label for="" class="col-form-label">Ubicación</label>
                                                        <select class="custom-select" id="Ubicacion">
                                                            <option value="Fisico">Físico</option>
                                                            <option value="Digital">Digital</option>
                                                        </select>
                                                    </div>            
                                                </div>   

                                                <!-- Diferentes opciones de formato -->
                                                <div class="col-lg-3">    
                                                    <div class="form-group">
                                                        <label for="" class="col-form-label">Formato</label>
                                                        <select class="custom-select" id="Formato">
                                                            <option value="Pasta dura">Pasta dura</option>
                                                            <option value="Pasta blanda">Pasta blanda</option>
                                                            <option value="PDF">PDF</option>
                                                            <option value="EPUB">EPUB</option>
                                                            <option value="MOBI">MOBI</option>
                                                            <option value="Otro">Otro</option>
                                                        </select>
                                                    </div>            
                                                </div>   
                                            </div>    

                                            <div class="row"> <!-- Renglon 4 -->
                                                <!-- Diferentes opciones de genero -->
                                                <div class="col-lg-6">    
                                                    <div class="form-group">
                                                        <label for="" class="col-form-label">Genero</label>
                                                        <select class="custom-select" id="Genero">
                                                            <option value="Novela">Novela</option>
                                                            <option value="Juvenil">Juvenil</option>
                                                            <option value="Ficción">Ficción</option>
                                                            <option value="No ficción">No ficción</option>
                                                            <option value="Novela negra">Novela negra</option>
                                                            <option value="Novela historica">Novela historica</option>
                                                        </select>
                                                    </div>            
                                                </div>    

                                                <div class="col-lg-6">    
                                                    <div class="form-group">
                                                        <label for="" class="col-form-label">Comentarios</label>
                                                        <input type="text" class="form-control" id="Cometarios">
                                                    </div>            
                                                </div>      
                                            </div>    
                                        </div>
                                    
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                                                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
                                            </div>
                                    </form>    
                                </div>
                            </div>
                        </div>   
                        <!--   Fin tabla -->

                        <br> </br>
                      <a class="btn btn-danger btn-lg" href="../bd/logout.php" role="button">Cerrar Sesión</a>
                    </div>
                </div>
            </div>
        </div>

      
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="../assets/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/popper/popper.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="../assets/datatables/datatables.min.js"></script>    
     
    <script type="text/javascript" src="main.js"></script>  
    
  </body>
</html>
