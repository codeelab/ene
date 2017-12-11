$(document).ready(function(){

// CARGA LOS DATOS SELECCIONADOS EN LA MATRICULA DEL ALUMNO y CUPO EN EL TALLER
//CUANDO ESTA EN LA VENTANA ALUMNO
    $("#matricula").change(function(){
      $.ajax({
          url:'registro/alumno',
          type:'POST',
          dataType:'json',
          data:{matricula:$('#matricula').val()}
      }).done(function(array){
          //console.log(array[0].nombre);
          $("#nombre").val(array[0].nombre);
          $("#a_paterno").val(array[0].a_paterno);
          $("#a_materno").val(array[0].a_materno);
      });
    });


    $("#taller").change(function(){
      $.ajax({
          url:'inicio/taller',
          type:'POST',
          dataType:'json',
          data:{taller:$('#taller').val()}
      }).done(function(array){
          //console.log(array[0].cupo);
          $("#cupo").val(array[0].cupo);
      });
    });

    $("#escuela_id").change(function(){
      $.ajax({
          url:'registro/escuela_tutora',
          type:'POST',
          dataType:'json',
          data:{escuela_id:$('#escuela_id').val()}
      }).done(function(array){
          //console.log(array[0].nombre);
         $("#nombre").val(array[0].nombre+array[0].a_paterno);
         // $("#a_paterno").val(array[0].a_paterno);
         // $("#a_materno").val(array[0].a_materno);
      });
    });


// CARGA LOS DATOS EN LA VENTA ALUMNO CUANDO HAY ERROR
//EN EL FORMULARIO y DEL CUPO
    $("#matricula").hover(function(){
      $.ajax({
          url:'alumno',
          type:'POST',
          dataType:'json',
          data:{matricula:$('#matricula').val()}
      }).done(function(array){
          //console.log(array[0].nombre);
          $("#nombre").val(array[0].nombre);
          $("#a_paterno").val(array[0].a_paterno);
          $("#a_materno").val(array[0].a_materno);
      });
    });


    $("#taller").change(function(){
      $.ajax({
          url: '../inicio/taller',
          type:'POST',
          dataType:'json',
          data:{taller:$('#taller').val()}
      }).done(function(array){
          //console.log(array[0].cupo);
          $("#cupo").val(array[0].cupo);
      });
    });

});

$(document).ready(function() {
    $('#Loading').hide();
    $('#username').blur(function() {
        var a = $("#username").val();
        var filter = /^[a-z\d](?:[a-z\d]|-(?=[a-z\d])){0,38}$/i;
        if (filter.test(a)) {
            $('#Loading').show();
            $.post("registro/checar_usuario", {
                username: $('#username').val()
            }, function(response) {
                $('#Loading').hide();
                setTimeout("finishAjax('Loading', '" + escape(response) + "')", 400);
            });
            return false;
        }
    });
});
$(document).ready(function() {
    $('#Loading').hide();
    $('#username').blur(function() {
        var a = $("#username").val();
        var filter = /^[a-z\d](?:[a-z\d]|-(?=[a-z\d])){0,38}$/i;
        if (filter.test(a)) {
            $('#loading').show();
            $.post("../registro/checar_usuario", {
                username: $('#username').val()
            }, function(response) {
                $('#loading').hide();
                setTimeout("finishAjax('Loading', '" + escape(response) + "')", 400);
            });
            return false;
        }
    });
});
function finishAjax(id, response){
  $('#'+id).html(unescape(response));
  $('#'+id).fadeIn(1000);
}

$(document).ready(function(){
    function e() {
        var e = a.val(),
            n = s.val();
        i.show().removeClass(), e != n && i.text(t).addClass("text-danger"), 0 != e.length && "" != e || i.text(r).addClass("text-warning"), 0 != e.length && e == n && i.text(o).removeClass("text-danger").addClass("text-success")
    }
    var a = $("[name=c_personal]"),
        s = $("[name=c_personal2]"),
        o = "Los correos si coinciden",
        t = "No coinciden ambos correos",
        r = "El campo no puede estar vacío",
        i = $("<span></span>").insertAfter(s);
    i.hide(), s.keyup(function() {
        e()
    })
});

$(document).ready(function() {
    $("#registro").bootstrapValidator({
        message: "Este valor no es válido",
        feedbackIcons: {
            valid: "fa fa-check",
            invalid: "fa fa-remove",
            validating: "fa fa-refresh"
        },
        fields: {
            c_personal: {
                validators: {
                    notEmpty: {
                        message: 'Es necesario su correo personal.'
                    },
                    emailAddress: {
                        message: 'Su Correo no pertenece a un dominio valido.'
                    },
                    regexp: {
                        regexp: /^[A-Z0-9._%+-]+@(?:[A-Z]{4}|gmail|yahoo|outlook|hotmail)+\.(com|mx|es)+$/i,
                        message: 'Sólo esta permitido el uso de Correos: Gmail, Yahoo, Outlook, Hotmail!'
                    }
                }
            },
            c_personal2: {
                validators: {
                    notEmpty: {
                        message: 'Es necesario su correo personal.'
                    },
                    emailAddress: {
                        message: 'Su Correo no pertenece a un dominio valido.'
                    },
                    regexp: {
                        regexp: /^[A-Z0-9._%+-]+@(?:[A-Z]{4}|gmail|yahoo|outlook|hotmail)+\.(com|mx|es)+$/i,
                        message: 'Sólo esta permitido el uso de Correos: Gmail, Yahoo, Outlook, Hotmail!'
                    }
                }
            },
            ficha_dep: {
                validators: {
                    notEmpty: {
                        message: 'Es necesario su número de Nómina o Control!'
                    },
                 stringLength: {
                        min: 5,
                        max: 15,
                        message: 'Mínimo de caracteres permitidos es 5.'
                    },
                    regexp: {
                        regexp: /^[0-9\s\-()+\.]+$/,
                        message: 'Sólo esta permitido el uso de Números!'
                    }
                }
            },
            username: {
                validators: {
                    notEmpty: {
                        message: "Es requerido su Usuario."
                    },
                    regexp: {
                        regexp: /^[a-z\d](?:[a-z\d]|-(?=[a-z\d])){0,38}$/i,
                        message: "No es un Usuario Valido"
                    },
                    different: {
                            field: 'password',
                            message: 'El nombre de Usuario y la Contraseña no pueden ser iguales entre sí.'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: "La contraseña es obligatoria y no puede estar vacía."
                    },
                    callback: {
                        callback: function(e, a, s) {
                            var o = s.val();
                            if ("" == o) return !0;
                            var t = zxcvbn(o),
                                r = t.score,
                                i = t.feedback.warning || "La contraseña es demasiado débil.",
                                n = $("#strengthBar");
                            switch (r) {
                                case 0:
                                    n.attr("class", "progress-bar progress-bar-danger").css("width", "1%");
                                    break;
                                case 1:
                                    n.attr("class", "progress-bar progress-bar-danger").css("width", "25%");
                                    break;
                                case 2:
                                    n.attr("class", "progress-bar progress-bar-danger").css("width", "50%");
                                    break;
                                case 3:
                                    n.attr("class", "progress-bar progress-bar-warning").css("width", "75%");
                                    break;
                                case 4:
                                    n.attr("class", "progress-bar progress-bar-success").css("width", "100%")
                            }
                            return !(r < 4) || {
                                valid: !1,
                                message: i
                            }
                        }
                    },
                    different: {
                            field: 'username',
                            message: 'La Contraseña no puede ser igual que el nombre de Usuario.'
                    }
                }
            },
            password2: {
                validators: {
                    notEmpty: {
                        message: "La contraseña de confirmación es obligatoria y no puede estar vacía."
                    },
                    identical: {
                        field: "password",
                        message: "La contraseña y su confirmación deben ser los mismos"
                    }
                }
            }
        }
    }).on("keyup", '[name="password"]', function() {
        var e = "" == $(this).val();
        $("#registro").bootstrapValidator("enableFieldValidators", "password", !e).bootstrapValidator("enableFieldValidators", "password2", !e), 1 == $(this).val().length && $("#registro").bootstrapValidator("validateField", "password").bootstrapValidator("validateField", "password2")
    })
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
