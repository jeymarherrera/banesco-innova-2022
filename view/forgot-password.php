<!-- forgot password -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto Innova | Banesco</title>
    <link href="public/img/logo/logo-innovacion.svg" rel="icon">
    <link href="public/img/logo/logo-innovacion.svg" rel="icon">
    <script src="https://kit.fontawesome.com/3f6fcc0d63.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="public/css/dashboard.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary">
    <?php
    require_once 'view/template/header-admin.php';
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">¿Has olvidado tu contraseña?</h1>
                                        <p class="mb-4">Es algo que suele suceder, tú no te preocupes. Sólo ingresa tu correo y pronto recibirás respuesta a través del mismo.</p>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Ingrese su correo...">
                                        </div>
                                        <a href="login.html" class="btn btn-primary btn-user btn-block">
                                            Recuperar Contraseña
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <p class="small" href="register.html">¿No tienes cuenta? Contacte al administrador para ser añadido al sistema</p>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="login.html">¿Ya tienes cuenta? Inicia Sesión</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php
    require_once 'view/template/footer-admin.php';
    ?>
    <script src="public/js/vendor/jquery/jquery.min.js"></script>
    <script src="public/js/vendor/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="public/js/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="public/js/dashboard.min.js"></script>
</body>
</html>