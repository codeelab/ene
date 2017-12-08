$(document).ready(function(){

    $( "#matricula" ).autocomplete({
      source: "registro/buscarAlumno",
      minLength: 8
    });

    $("#matricula").focusout(function(){
      $.ajax({
          url:'registro/alumno',
          type:'POST',
          dataType:'json',
          data:{matricula:$('#matricula').val()}
      }).done(function(respuesta){
          $("#nombre").val(respuesta.nombre);
          $("#a_paterno").val(respuesta.a_paterno);
          $("#a_materno").val(respuesta.a_materno);
      });
    });
});

$(document).ready(function(){
    $("#procedencia").change(function(){
        $.ajax({
            url:"lib/buscartutora.php",
            type: "POST",
            data:"idtutora="+$("#procedencia").val(),
            success: function(opciones){
        $("#nombre").html(opciones);
        }
    })
  });
});
/*
$(document).ready(function() {
    $('#tabla_folios').dataTable( {
         "lengthMenu": [ [5, 10, 15, -1], [5, 10, 15, "All"] ],
        //"dom": '<"top"i>rt<"bottom"flp><"clear">', //Modifica la posición de los elementos en la busqueda
        "pagingType": "full_numbers",
        "searching": true,
        "ordering": false,
        "info":     false
    });

});
*/


function eliminaTaller(cod){
swal({
    title: "Estas seguro?",
    text: "Si eliminas el Taller, se perdera!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Sí, Eliminar!",
    cancelButtonText: "No, Cancelar!",
    closeOnConfirm: false,
    closeOnCancel: false },
function (isConfirm) {
    if (isConfirm){
        $.ajax({
        type: "GET",
        url: 'lib/delete_taller.php?cod='+cod,
        }).done(function() {
        swal("Eliminado!", "El taller ha sido eliminado del sistema.", "success");
        window.location.href = "talleres";
        }).fail(function(){
        swal("Error!", "El taller no se ha podido eliminar :(", "error");
        });
        }else{
        swal("Cancelado!", "El taller no se ha eliminado :(", "info");
        }
        });
}

function eliminaAlumno(cod){
swal({
    title: "Estas seguro?",
    text: "Si eliminas el Alumno, se perdera!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Sí, Eliminar!",
    cancelButtonText: "No, Cancelar!",
    closeOnConfirm: false,
    closeOnCancel: false },
function (isConfirm) {
    if (isConfirm){
        $.ajax({
        type: "GET",
        url: 'lib/delete_alumno.php?cod='+cod,
        }).done(function() {
        swal("Eliminado!", "El Alumno ha sido eliminado del sistema.", "success");
        window.location.href = "alumnos";
        }).fail(function(){
        swal("Error!", "El Alumno no se ha podido eliminar :(", "error");
        });
        }else{
        swal("Cancelado!", "El Alumno no se ha eliminado :(", "info");
        }
        });
}

function deletePonentes(code){
swal({
    title: "Estas seguro?",
    text: "Si eliminas el Ponente, se perdera!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Sí, Eliminar!",
    cancelButtonText: "No, Cancelar!",
    closeOnConfirm: false,
    closeOnCancel: false },
function (isConfirm) {
    if (isConfirm){
        $.ajax({
        type: "GET",
        url: 'lib/delete_ponente.php?code='+code,
        }).done(function() {
        swal("Eliminado!", "El Ponente ha sido eliminado del sistema.", "success");
        window.location.href = "speakers";
        }).fail(function(){
        swal("Error!", "El Ponente no se ha podido eliminar :(", "error");
        });
        }else{
        swal("Cancelado!", "El Ponente no se ha eliminado :(", "info");
        }
        });
}

function entregaMaterial(mat){
swal({
    title: "Estas seguro?",
    text: "Si entregas el material se registrara!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Sí, Entregar!",
    cancelButtonText: "No, Cancelar!",
    closeOnConfirm: false,
    closeOnCancel: false },
function (isConfirm) {
    if (isConfirm){
        $.ajax({
        type: "GET",
        url: 'lib/update_material.php?id='+mat,
        }).done(function() {
        swal("Entregado!", "El Material ha sido entregado al registrante", "success");
        window.location.href = "folio";
        }).fail(function(){
        swal("Error!", "El Material no se ha podido entregar :(", "error");
        });
        }else{
        swal("Cancelado!", "El Material no se ha entregado :(", "info");
        }
        });
}

function cancelaFolio(cod){
swal({
    title: "Estas seguro?",
    text: "Si Cancelas el Folio, se mandara a papelera de manera temporal!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Sí, Eliminar!",
    cancelButtonText: "No, Cancelar!",
    closeOnConfirm: false,
    closeOnCancel: false },
function (isConfirm) {
    if (isConfirm){
        $.ajax({
        type: "GET",
        url: 'lib/delete_folio.php?cod='+cod,
        }).done(function() {
        swal("Eliminado!", "El Folio ha sido cancelado en el sistema.", "success");
        window.location.href = "folio";
        }).fail(function(){
        swal("Error!", "El Folio no se ha podido cancelar :(", "error");
        });
        }else{
        swal("Cancelado!", "El Folio no se ha cancelado :(", "info");
        }
        });
}

function recuperarFolio(id){
swal({
    title: "Estas seguro?",
    text: "Si recuperas el Folio, se habilitara en el sistema!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#1ab394",
    confirmButtonText: "Sí, Recuperar!",
    cancelButtonText: "No, Cancelar!",
    closeOnConfirm: false,
    closeOnCancel: false },
function (isConfirm) {
    if (isConfirm){
        $.ajax({
        type: "GET",
        url: 'lib/recupera_folio.php?id='+id,
        }).done(function() {
        swal("Recuperado!", "El Folio ha sido habilitado en le sistema.", "success");
        window.location.href = "folio";
        }).fail(function(){
        swal("Error!", "El Folio no se ha podido recuperar :(", "error");
        });
        }else{
        swal("Cancelado!", "El Folio no se ha recuperado :(", "info");
        }
        });
}

function recuperarMaterial(rec){
swal({
    title: "Estas seguro?",
    text: "Si recuperas el Material, se habilitara en el sistema!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#1ab394",
    confirmButtonText: "Sí, Recuperar!",
    cancelButtonText: "No, Cancelar!",
    closeOnConfirm: false,
    closeOnCancel: false },
function (isConfirm) {
    if (isConfirm){
        $.ajax({
        type: "GET",
        url: 'lib/recupera_material.php?rec='+rec,
        }).done(function() {
        swal("Recuperado!", "El Material ha sido habilitado en le sistema.", "success");
        window.location.href = "folios_entregados";
        }).fail(function(){
        swal("Error!", "El Material no se ha podido recuperar :(", "error");
        });
        }else{
        swal("Cancelado!", "El Material no se ha recuperado :(", "info");
        }
        });
}
