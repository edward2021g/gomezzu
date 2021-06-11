<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="shortcut icon" href="#" />  -->
    <title>Login</title>
    <!--<link rel="stylesheet" href="style.css"> -->

    
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">

    <!--

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="main.css">  
      
      

    <link rel="stylesheet" type="text/css" href="assets/datatables/datatables.min.css"/>
   
    <link rel="stylesheet"  type="text/css" href="assets/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">    
      
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"> 
      --> 
  </head>

    
  <body> 
     <header>
     <h3 class='text-center'></h3>
     </header>    
      
      <!-- LOGIN-->
      <div id="login">
            <h3 class="text-center text-white pt-5">Login al sistema</h3>
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div class="login-box col-md-12">
                            <form id="login-form" class="form" action="" method="post">
                                <h3 class="text-center text-info">Ingresar</h3>
                                <div class="form-group">
                                    <label for="username" class="text-info">Usuario:</label><br>
                                    <input type="text" name="username" id="username" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="text-info">Contraseña:</label><br>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="remember-me" class="text-info"><span>Recordarme</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                    <input type="submit" value="Ingresar" class="btn btn-info btn-md"> <!--id="validar" data-toggle="modal" data-target="#myModal"> Comentado 09-05-2021-->
                                </div>
                                <div id="register-link" class="text-right">
                                    <a href="#" class="text-info">Registrarse</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <!-- -->
      

    <!-- -->
    <script src="assets/jquery/jquery-3.3.1.min.js"></script>    
     <script src="assets/bootstrap/js/bootstrap.min.js"></script>    
     <script src="assets/popper/popper.min.js"></script>    
        
     <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>    
     <script src="code.js"></script>   
    
  </body>
</html>
