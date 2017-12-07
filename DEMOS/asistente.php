<?php include('model/model.php'); ?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ENE | REGISTRO</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="assets/css/bootstrapValidator.min.css"/>
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <style type="text/css">
    .form-control{ box-shadow:none; border-color:#eee; height:49px;}
    .form-control:focus{ box-shadow:none; border-color:#00b09c;}
    .form-control-feedback{ line-height:50px;}
    .main-btn{ background:#00b09c; border-color:#00b09c; color:#fff;}
    .main-btn:hover{ background:#00a491;color:#fff;}
    .form-control-feedback {
    line-height: 50px;
    top: 0px;
    }
    </style>
</head>

<body>

    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="assets/img/ene.png" width="170" height="100"/> <center>ENE MORELIA</center>
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> </span> </a>
                        </div>
                        <div class="logo-element">
                            Soporte
                        </div>
                    </li>
                    <li>
                        <a href="alumno"><i class="fa fa-edit fa-fw"></i><span class="nav-label">Registro Alumnos ENE</span></a>
                    </li>
                    <li>
                        <a href="institucion"><i class="fa fa-edit fa-fw"></i><span class="nav-label">Registro Estudiantes</span></a>
                    </li>
                    <li>
                        <a href="calidad"><i class="fa fa-edit fa-fw"></i><span class="nav-label">Registro Tutoras</span></a>
                    </li>
                    <li>
                        <a href="asistente"><i class="fa fa-edit fa-fw"></i><span class="nav-label">Registro Asistentes</span></a>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Escuela Normal para Educadoras de Morelia | <?php setlocale(LC_ALL,'es_MX'); echo strftime("%A %d de %B del %Y"); ?>
            <?php $hora = time(); putenv("TZ=America/Mexico_City"); echo date ("H:i a", $hora); ?></span>
                </li>
                <li>
                    <a class='dropdown-toggle count-info' data-toggle='dropdown' href='#'>
                    <i class='fa fa-users'></i><span class='label label-primary'></span></a>
                </li>
            </ul>
        </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Solicitud de Registro | Foro Nacional de Educación Preescolar <?php echo date('Y') ?></h2>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-md-12">

<div class="alert alert-warning">
  <strong>Aviso!</strong> Estimado usuario(a), una vez registrado en el Foro Nacional de Educación Preescolar se le enviará un correo electrónico de registro con los datos de pago, los tiempos estimados de llegada son de <b>1 a 30 minutos</b>, en caso de no recibir respuesta, favor de comunicarse al siguiente correo: <b>foroenemorelia@gmail.com</b></a>
</div>

            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-bookmark"></span> REGISTRO DE ASISTENTES</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                <form role="form" id="asistentes" class="form-horizontal" method="post" accept-charset="utf-8">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nombre:</label>
                        <div class="col-sm-3"><input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control" autocomplete="off"></div>
                        <div class="col-sm-3"><input type="text" name="a_paterno" id="a_paterno" placeholder="Apellido Paterno" class="form-control" autocomplete="off"></div>
                        <div class="col-sm-3"><input type="text" name="a_materno" id="a_materno" placeholder="Apellido Materno" class="form-control" autocomplete="off"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Elija Taller</label>
                    <div class="col-sm-9">
                      <select class="form-control m-b" name="taller" id="selectCursos">
                      <option value="">---</option>
                        <?php
                        while($row = mysql_fetch_assoc($talleres)) {
                        echo '<option  value="'.$row['id_taller'].'">'.$row['nombres'].' -  ( '.$row['cupo'].' )</option>';
                        }
                        echo "</select>";
                          ?>
                    </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Por que medio te enteraste del foro?</label>
                    <div class="col-sm-4">
                        <select class="form-control m-b" name="medio" id="medio">
                            <option value="">---</option>
                        <?php
                        while($row = mysql_fetch_assoc($medio)) {
                        echo '<option  value="'.$row['id_medio'].'">'.$row['nombre_medio'].'</option>';
                        }
                        echo "</select>";
                          ?>
                    </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Correo Personal:</label>
                    <div class="col-sm-4">
                        <input type="email" name="c_personal" id="c_personal" placeholder="Correo Personal" class="form-control" autocomplete="off"></div>
                    <div class="col-sm-4">
                    <div class="checkbox checkbox-info checkbox-circle">
                        <input type="checkbox" name="acepto" id="acepto"/>
                        <label>Acepto decir la verdad</label>
                    </div>
                    </div>
                    </div>

                    <button class="btn btn-block btn-rounded ladda-button ladda-button-check btn btn-info" type="submit" id="BtnAsistentes">Enviar</button>
                </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
      </div>

        <div class="footer">
            <div class="pull-right">
              <a href="www.codeelab.com" target="_blank">Codeelab</a>
            </div>
            <div>
                <? echo date('Y').' '.$nombre_completo; ?>
            </div>
        </div>

        </div>
        </div>
    <!-- Mainly scripts -->
    <script src="assets/js/jquery-2.1.1.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="assets/js/inspinia.js"></script>
    <script src="assets/js/plugins/pace/pace.min.js"></script>
    <script src="assets/js/funciones.js"></script>
    <script type="text/javascript" src="assets/js/bootstrapValidator.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui-1.10.4.min.js"></script>

    <script type="text/javascript">
         $('#asistentes').bootstrapValidator({
        message: 'Este valor no es válido',
        feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-remove',
            validating: 'fa fa-refresh'
        },
        fields: {
            nombre: {
                validators: {
                    notEmpty: {
                        message: 'Es necesario agregar su nombre.'
                    },
                    regexp: {
                        regexp: /^[ A-Za-zäÄëËïÏöÖüÜáéíóúáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙ.-]+$/,
                        message: 'Sólo esta permitido el uso de Letras, sin acentos!'
                    }
                }
            },
            a_paterno: {
                validators: {
                    notEmpty: {
                        message: 'Es necesario agregar su apellido paterno.'
                    },
                    regexp: {
                        regexp: /^[ A-Za-zäÄëËïÏöÖüÜáéíóúáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙ.-]+$/,
                        message: 'Sólo esta permitido el uso de Letras, sin acentos!'
                    }
                }
            },
            a_materno: {
                validators: {
                    notEmpty: {
                        message: 'Es necesario agregar su apellido materno.'
                    },
                    regexp: {
                        regexp: /^[ A-Za-zäÄëËïÏöÖüÜáéíóúáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙ.-]+$/,
                        message: 'Sólo esta permitido el uso de Letras, sin acentos!'
                    }
                }
            },
            taller: {
                validators: {
                    notEmpty: {
                        message: 'Elija el taller a cursar.'
                    }
                }
            },
            medio: {
                validators: {
                    notEmpty: {
                        message: 'Elija un medio de difusion.'
                    }
                }
            },
            acepto: {
                validators: {
                    notEmpty: {
                        message: 'Es necesario aceptar la validación de información'
                    }
                }
            },
            c_personal: {
                validators: {
                    notEmpty: {
                        message: 'Es necesario su correo personal.'
                    },
                    emailAddress: {
                        message: 'Su Correo no pertenece a un dominio valido.'
                    },
                    regexp: {
                        regexp: /^[A-Z0-9._%+-]+@(?:[A-Z]{4}|gmail|yahoo|outlook|hotmail)+\.(com|mx|es|com.mx|com.es)+$/i,
                        message: 'Sólo esta permitido el uso de Correos: Gmail, Yahoo, Outlook, Hotmail!'
                    }
                }
            }
        }
    });
$("#BtnAsistentes").click(function() {
var id=$("#selectCursos").val();
var nombre=$("#nombre").val();
var a_paterno=$("#a_paterno").val();
var a_materno=$("#a_materno").val();
var medio=$("#medio").val();
var c_personal=$("#c_personal").val();
var acepto=$("#acepto").val();
var datos='id_taller='+id+ '&nombre='+nombre+ '&a_paterno='+a_paterno+ '&a_materno='+a_materno+ '&medio='+medio+ '&c_personal='+c_personal+ '&acepto='+acepto;

    $.ajax({
        url:'lib/reg_asistente.php', // url del archivo php
        type:'POST', //metodo de envio
        data: datos // cadena de variable
        }).done(//funcion a ejecutar si se hace la peticion
            function(resp)// recibimos un parametro de respuesta
                    {
                        if(resp){
                            swal(resp);
                            //alert(resp);
                            //$('form')[0].reset();
                        }
                        else{
                            swal("Error");
                            //alert("Error");
                            //$('form')[0].reset();
                        }
                    }
        );
});
    </script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-93258404-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
