<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login inventario de libros</title>
        <link rel="stylesheet" href="style.css">

        <!------ 09-05-2021 ---------->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="estilos.css">
        <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
        <!------ 09-05-2021 ---------->

        <!--
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        -->
        <!------ Include the above in your HEAD tag ---------->

        <!--
        <script src="code.js"></script>
        <link rel="stylesheet" href="code.js">
        -->

        <!--
        <script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
        -->
        <!-- JavaScript Bundle with Popper -->
        <!--
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
        -->

        <!-- SweetAlert -->
        <!--
        <link rel="stylesheet" href="plugins/sweetalert2/sweetaler2.min.css">
        -->
    </head>
    <body>
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
                                    <input type="text" name="password" id="password" class="form-control">
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

             <!-- Modal -->
            <!--
            <div id="myModal" class="modal fade" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">  
               
                    <div class="modal-content">
                        <div class="modal-header">
                            <CENTER>
                                <h4 class="modal-title"> Sistema de inventario de libros </h4>
                
                            </CENTER>
                        </div>
                        <div class="modal-body">
                            <CENTER>
                                <p style="font-style: normal;">¡INICIO DE SESIÓN! :)</p>
                            </CENTER>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
                        </div>
                    </div> 
                </div>
            </div>
            -->
            
     <script src="jquery/jquery-3.3.1.min.js"></script>    
     <script src="bootstrap/js/bootstrap.min.js"></script>    
     <script src="popper/popper.min.js"></script>    
        
     <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>    
     <script src="code.js"></script>   


    </body>
</html>