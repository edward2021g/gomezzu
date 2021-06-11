$(document).ready(function() {
var ID, opcion;
opcion = 4;
    
tablaLibros = $('#tablaLibros').DataTable({  
    "ajax":{            
        "url": "../bd/crud.php", 
        "method": 'POST', //uso del metodo POST
        "data":{opcion:opcion}, //opcion 4 = SELECT
        "dataSrc":""
    },
    "columns":[
        {"data": "ID"},
        {"data": "Titulo"},
        {"data": "Autor"},
        {"data": "Editorial"},
        {"data": "Paginas"},
        {"data": "Anio_Publicacion"},
        {"data": "Ubicacion"},
        {"data": "Formato"},
        {"data": "Genero"},
        {"data": "Cometarios"},
        {"defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn-sm btnEditar'><i class='material-icons'>edit</i></button><button class='btn btn-danger btn-sm btnBorrar'><i class='material-icons'>delete</i></button></div></div>"}
    ]
});     

var fila; //captura fila
//submit para el Alta y Actualización
$('#formLibros').submit(function(e){                         
    e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
    ID = $.trim($('#ID').val());    
    Titulo = $.trim($('#Titulo').val());
    Autor = $.trim($('#Autor').val());    
    Editorial = $.trim($('#Editorial').val());    
    Paginas = $.trim($('#Paginas').val());
    Anio_Publicacion = $.trim($('#Anio_Publicacion').val());    
    Ubicacion = $.trim($('#Ubicacion').val());  
    Formato = $.trim($('#Formato').val());  
    Genero = $.trim($('#Genero').val());  
    Cometarios = $.trim($('#Cometarios').val());  
        $.ajax({
          url: "../bd/crud.php",
          type: "POST",
          datatype:"json",    
          data:  {ID:ID, Titulo:Titulo, Autor:Autor, Editorial:Editorial, Paginas:Paginas, Anio_Publicacion:Anio_Publicacion ,Ubicacion:Ubicacion ,Formato:Formato ,Genero:Genero ,Cometarios:Cometarios ,opcion:opcion},    
          success: function(data) {
            tablaLibros.ajax.reload(null, false);
           }
        });			        
    $('#modalCRUD').modal('hide');											     			
});
        
 

//para limpiar los campos antes de dar de Alta un libro
$("#btnNuevo").click(function(){
    opcion = 1; //alta           
    ID=null;
    $("#formLibros").trigger("reset");
    $(".modal-header").css( "background-color", "#17a2b8");
    $(".modal-header").css( "color", "white" );
    $(".modal-title").text("Alta de Libro");
    $('#modalCRUD').modal('show');	    
});

//Editar        
$(document).on("click", ".btnEditar", function(){		        
    opcion = 2;//editar
    fila = $(this).closest("tr");	        
    ID = parseInt(fila.find('td:eq(0)').text()); //capturo el ID		            
    Titulo = fila.find('td:eq(1)').text();
    Autor = fila.find('td:eq(2)').text();
    Editorial = fila.find('td:eq(3)').text();
    Paginas = fila.find('td:eq(4)').text();
    Anio_Publicacion = fila.find('td:eq(5)').text();
    Ubicacion = fila.find('td:eq(6)').text();
    Formato = fila.find('td:eq(7)').text();
    Genero = fila.find('td:eq(8)').text();
    Cometarios = fila.find('td:eq(9)').text();
    $("#ID").val(ID); //Capturo los datos del renglon seleccionado en el modal
    $("#Titulo").val(Titulo);
    $("#Autor").val(Autor);
    $("#Editorial").val(Editorial);
    $("#Paginas").val(Paginas);
    $("#Anio_Publicacion").val(Anio_Publicacion);
    $("#Ubicacion").val(Ubicacion);
    $("#Formato").val(Formato);
    $("#Genero").val(Genero);
    $("#Cometarios").val(Cometarios);
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white" );
    $(".modal-title").text("Editar Libro");		
    $('#modalCRUD').modal('show');		   
});

//Borrar
$(document).on("click", ".btnBorrar", function(){
    fila = $(this);           
    ID = parseInt($(this).closest('tr').find('td:eq(0)').text()) ;		
    opcion = 3; //eliminar        
    var respuesta = confirm("¿Está seguro de borrar el registro "+ID+"?");                
    if (respuesta) {            
        $.ajax({
          url: "../bd/crud.php",
          type: "POST",
          datatype:"json",    
          data:  {opcion:opcion, ID:ID},    
          success: function() {
              tablaLibros.row(fila.parents('tr')).remove().draw();                  
           }
        });	
    }
 });
     
});    