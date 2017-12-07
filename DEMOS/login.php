<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Administrador | Login</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6">
                <h2 class="font-bold">Escuela Normal para Educadoras | Sistema de Ticket</h2>

                <p>
                    Con el fin de agilizar las solicitudes de registro y servir mejor a usted,
                    utilizamos un sistema de ticket de soporte. Cada solicitud de pago se le
                    asigna un número ID de ticket único que se puede utilizar para rastrear el progreso
                    y respuestas en línea.
                </p>

                <p>
                    Para su información le proporcionamos archivos completos y la historia de todas sus
                    solicitudes de ticket. Se requiere una dirección válida de correo electrónico para
                    enviar un ticket.
                </p>

            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    <form class="m-t" role="form" action="lib/procesa_login.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="login" placeholder="Usuario" required autofocus>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="pass" placeholder="Contraseña" required autofocus>
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Ingreso</button>

                    </form>

                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Escuela Normal para Educadoras &copy; <?php echo date('Y'); ?>
            </div>
            <div class="col-md-6 text-right">
              <a href="www.codeelab.com" target="_blank">Codeelab</a>
            </div>
        </div>
    </div>

</body>
</html>
