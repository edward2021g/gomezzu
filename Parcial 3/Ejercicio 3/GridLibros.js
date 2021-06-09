$('document').ready(function () {

    $.post('./GetLibros.php', function (ret) {
    
            if ( ret['resultado'] !=0 ) {
                 alert('Error de carga');
            } else {
                 $("#jsGrid").jsGrid({
                 width: "100%",
                 height: "400px",
                 inserting: true,
                 editing: true,
                 sorting: true,
                 paging: true,
                 data: ret.detalle,
                 onItemDeleted: function(args) {   console.log(args.item);  },
                 fields: [{ name: "ID",type: "text",title: "ID",         width: 100,validate: "required"},
                         { name: "Titulo",    type: "text",title: "Titulo",     width: 100},
                         { name: "Autor", type: "text",title: "Ap.PaterAutorno", width: 200},
                         { name: "Editorial", type: "text",title: "Editorial", width: 200},
                         { name: "Paginas",     type: "text",title: "Paginas",      width: 200},
                         { name: "Anio_Publicacion",     type: "text",title: "Año de Publicacion",      width: 200},
                         { name: "Ubicacion",     type: "text",title: "Ubicacion",      width: 200},
                         { name: "formato",     type: "text",title: "formato",      width: 200},
                         { name: "genero",     type: "text",title: "genero",      width: 200},
                         { name: "Cometarios",     type: "text",title: "Cometarios",      width: 200},
                         { type: "control"}],
                });
            }
    },'json');
    });