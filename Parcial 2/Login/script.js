/*$(document).ready(function()
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
*/

$('#login-form').submit(function(e){
   e.preventDefault();
   var usuario = $.trim($("#username").val());    
   var password =$.trim($("#password").val()); 
   alert(usuario);
   alert(password);
    /*
   if(usuario.length == "" || password == ""){
      Swal.fire({
          type:'warning',
          title:'Debe ingresar un usuario y/o password',
      });
      return false; 
    }else{
        $.ajax({
           url:"bd/login.php",
           type:"POST",
           datatype: "json",
           data: {usuario:usuario, password:password}, 
           success:function(data){               
               if(data == "null"){
                   Swal.fire({
                       type:'error',
                       title:'Usuario y/o password incorrecta',
                   });
               }else{
                   Swal.fire({
                       type:'success',
                       title:'¡Conexión exitosa!',
                       confirmButtonColor:'#3085d6',
                       confirmButtonText:'Ingresar'
                   }).then((result) => {
                       if(result.value){
                           window.location.href = "vistas/pag_inicio.php";
                       }
                   })
                   
               }
           }    
        });
    } 
*/
});
