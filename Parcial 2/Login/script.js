$(document).ready(function()
 {
                    $("#validar").click(function(){
                        var usuario=$('#username').val();
                        var contrasena=$('#password').val();

                     if( usuario='admin' && contrasena=='admin') {
                        $('#myModal').modal('show');
                                                              
                       }
                     else {
                        $('.modal-body').html("CONTRASEÑA INCORRECTA :(");
                        $('#myModal').modal('show');
                                         }
              
             });
     
         });