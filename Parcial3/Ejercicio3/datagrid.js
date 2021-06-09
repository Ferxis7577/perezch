$('document').ready(function(){
    $.post('datagrid.php', function(resultados){
        $('#datagrid').jsGrid({
            width: "100%", height: "400px", editing:true, sorting: true,
            paging:true,pageIndex:1, pageSize:10,  loadIndication: true,
            loadIndicationDelay: 500, confirmDeleting: true, deleteConfirm: "Favor de confirmar",

        

            data: resultados,
            fields: [{name: "idusuario", type: "text", title: "idUsuario", width: 15, validate:"requiered", align: "center"},
                    {name:"nombreusuario", type:"text", title:"NombreUsuario", width:30,align: "left"},
                    {name:"correo", type:"text", title:"Correo", width:40,align: "left"},
                    {name:"pswrd", type:"number", title:"Password", width:70,align: "left"},
        ]
        });
    },'json');
});