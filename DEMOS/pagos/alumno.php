<?php require('../model/model.php');
session_start();
if ($_SESSION["login"]==""){
    header("location: ../index");
}


?>
<?php include("theme/header.php");?>

<body>
    <div id="wrapper">
        <?php include("theme/nav.php");?>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <?php include("lib/navegador.php");?>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message"><?php setlocale(LC_ALL,'es_MX'); echo strftime("%A %d de %B del %Y"); ?>
            <?php $hora = time(); putenv("TZ=America/Mexico_City"); echo date ("H:i a", $hora); ?></span>
                </li>
                <li>
                <a class='dropdown-toggle count-info' href='#'>
                <i class='fa fa-users'></i><span class='label label-warning'></span>
                </a>
                </li>
                <li><?php include("lib/online.php");?></li>
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

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-bookmark"></span> REGISTRO ALUMNO DE LA ESCUELA NORMAL PARA EDUCADORAS DE MORELIA</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                <form role="form" id="alumno" class="form-horizontal" action="lib/reg_alumno.php" method="post" accept-charset="utf-8">
                <div class="messages"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Matricula:</label>
                    <div class="col-sm-5">
                        <input type="text" name="matricula" id="matricula" placeholder="Matricula" class="form-control" autocomplete="off"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nombre:</label>
                        <div class="col-sm-3"><input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control" autocomplete="off" readonly></div>
                        <div class="col-sm-3"><input type="text" name="a_paterno" id="a_paterno" placeholder="Apellido Paterno" class="form-control" autocomplete="off" readonly></div><div class="col-sm-3"><input type="text" name="a_materno" id="a_materno" placeholder="Apellido Materno" class="form-control" autocomplete="off" readonly></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Elija Taller</label>
                    <div class="col-sm-9">
                      <select class="form-control m-b" name="taller" id="taller">
                      <option value="">---</option>
                        <?php
                        while($row = mysql_fetch_assoc($talleres)) {
                        echo '<option  value="'.$row['id_taller'].'">'.$row['nombres'].' - Espacio Disponible ( '.$row['cupo'].' )</option>';
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
                    <button class="btn btn-block btn-rounded ladda-button ladda-button-check btn btn-primary" type="submit">Enviar</button>
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
    <script src="../assets/js/jquery-2.1.1.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="../assets/js/inspinia.js"></script>
    <script src="../assets/js/plugins/pace/pace.min.js"></script>
    <script src="../assets/js/funciones.js"></script>
    <script src="../assets/js/plugins/sweetalert/sweetalert.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrapValidator.min.js"></script>
    <script type="text/javascript" src="../assets/js/jquery-ui-1.10.4.min.js"></script>

    <script type="text/javascript">
        $('#alumno').bootstrapValidator({
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
                        message: 'Sólo esta permitido el uso de Letras!'
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
                        message: 'Sólo esta permitido el uso de Letras!'
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
                        message: 'Sólo esta permitido el uso de Letras!'
                    }
                }
            },
            matricula: {
                validators: {
                    notEmpty: {
                        message: 'Es necesario ingresar su Matricula!'
                    },
                 stringLength: {
                        min: 8,
                        max: 12,
                        message: 'Mínimo de caracteres permitidos es 8.'
                    },
                    regexp: {
                        regexp: /^[0-9\s\-()+\.]+$/,
                        message: 'Sólo esta permitido el uso de Números!'
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


</script>
</body>
</html>
