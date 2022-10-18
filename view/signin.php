<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="public/img/logo/logo-innovacion.svg" rel="icon">
    <link href="public/img/logo/logo-innovacion.svg" rel="icon">
    <title>Inicio de Sesión</title>
    <script src="https://kit.fontawesome.com/3f6fcc0d63.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="public/css/dashboard.css" rel="stylesheet">
    <link href="public/css/dashboard.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary">
<?php
  require_once 'view/template/header.php';
  ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">¡Bienvenido de vuelta!</h1>
                                    </div>
                                    <form class="user" method="POST" action="./?op=acceder">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Ingrese su correo..." required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Ingrese su contraseña" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Recordar</label>
                                            </div>
                                        </div>
                                        <a href="signin.php" class="btn btn-primary btn-user btn-block" type="submit">
                                            Iniciar Sesión
                                        </a>
                                        <hr>
                                    </form>
                                    <div class="text-center">
                                        <a class="small" href="?op=olvido">¿Has olvidado tu contraseña?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require_once 'view/template/footer.php';
    ?>
    <script src="public/js/vendor/jquery/jquery.min.js"></script>
    <script src="public/js/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="public/js/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="public/js/dashboard.min.js"></script>
</body>
</html>