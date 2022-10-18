<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reto Innova - Banisco</title>
  <link href="public/img/logo/logo-innovacion.svg" rel="icon">
  <link href="public/img/logo/logo-innovacion.svg" rel="icon">
  <link href="public/img/favicon.ico" rel="icon" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet"/>   
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"/>
  <link href="public/lib/animate/animate.min.css" rel="stylesheet" />
  <link href="public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"/>
  <link href="public/css/bootstrap/bootstrap.min.css" rel="stylesheet" />
  <link href="public/css/style.css" rel="stylesheet" />  
  <link href="public/css/registo.css" rel="stylesheet" /> 
  </head>

  <body>
      <!-- navbar -->
      <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
      <a href="home.php" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0"><img class="img-fluid me-3" src="public/img/logo/logo.png" alt="logo-banesco"/></h1>
      </a>
      <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"><span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto bg-light rounded pe-4 py-3 py-lg-0">
          <a href="index.html" class="nav-item nav-link active">Inicio</a>
          <a href="about.html" class="nav-item nav-link">Sobre Nosotros</a>
          <a href="service.html" class="nav-item nav-link">Nuestros Servicios</a>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
              Contáctenos
            </a>
            <div class="dropdown-menu bg-light border-0 m-0">
              <a href="404.html" class="dropdown-item">Chat en Línea</a>
              <a href="404.html" class="dropdown-item">DANI (WhatsApp)</a>
              <a href="404.html" class="dropdown-item">+507 800-1300</a>
              <a href="404.html" class="dropdown-item">0500 226 3726</a>
              <a href="404.html" class="dropdown-item">404 Page</a>
            </div>
          </div>
          <a href="contact.html" class="nav-item nav-link"></a>
        </div>
      </div>
    </nav>

   
      <!-- Carousel -->
      <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="w-100" src="public/img/carousel/carousel1.jpg" alt="Image" />
            </div>
            <div class="carousel-item">
              <img class="w-100" src="public/img/carousel/carousel2.png" alt="Image" />
            </div>
            <div class="carousel-item">
              <img class="w-100" src="public/img/carousel/carousel3.jpg" alt="Image" />
            </div>
            <div class="carousel-item">
              <img class="w-100" src="public/img/carousel/carousel4.png" alt="Image" />
            </div>
          </div>
          <div class="carousel-item">
              <img class="w-100" src="public/img/carousel/carousel5.jpg" alt="Image" />
            </div>
            <div class="carousel-item">
              <img class="w-100" src="public/img/carousel/carousel6.png" alt="Image" />
            </div>
            <div class="carousel-item">
              <img class="w-100" src="public/img/carousel/carousel7.jpg" alt="Image" />
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

    <!-- registro -->
    <div class="container">
    <?php
    require_once 'view/registros/registro.php';
    ?>
    </div>

    <footer id="footer">
    <div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
      <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
              <h1 class="text-white mb-4">
                <img class="img-fluid me-3" src="public/img/logo/logo-blanco-innova.svg" alt=""/>
              </h1>
              <p>Actividad organizada por Banesco (Panamá) S.A , la Universidad Tecnológica de Panamá, la Facultad de Ingeniería de Sistemas Computacionales (FISC) y el Centro de Investigación, Desarrollo e Innovación en Tecnología de la Información y las Comunicaciones (CIDITIC).
              </p>
              <div class="d-flex pt-2">
                <a class="btn btn-square me-1" href="">
                  <i class="fab fa-twitter"></i>
                </a>
                <a class="btn btn-square me-1" href="">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a class="btn btn-square me-1" href="">
                  <i class="fab fa-youtube"></i>
                </a>
                <a class="btn btn-square me-0" href="">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Beneficios Banesco</h5>
                <p>Calculadora de puntos</p>
                <p>Compra con puntos en estos comercios</p>
                <p>>Compra a cuotas en estos comercios</p>
                <p>Promociones</p>
              </div>
              <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">De interés</h5>
                <a class="btn btn-link" href="">Sobre Nosotros</a>
                <a class="btn btn-link" href="">Contáctenos</a>
                <a class="btn btn-link" href="">Nuestros Servicios</a>
                <a class="btn btn-link" href="">Preguntas Frecuentes</a>
              </div>
              <div class="col-lg-3 col-md-6">
                <p>Solo para uso administrativo.</p>
                <div class="position-relative mx-auto" style="max-width: 400px">
                <a href="?op=login">
                  <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2" >
                    Ir al sistema
                  </button></a>
                </div>
              </div>
            </div>
          </div>
          <div class="container-fluid copyright">
            <div class="container">
              <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a href="#">2022 Banesco (Panamá)</a>, S.A. Todos los derechos reservados.
              </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Boton top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top">
      <i class="bi bi-arrow-up"></i>
    </a>

    <!-- links javascript -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="public/lib/wow/wow.min.js"></script>
    <script src="public/lib/easing/easing.min.js"></script>
    <script src="public/lib/waypoints/waypoints.min.js"></script>
    <script src="public/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="public/lib/counterup/counterup.min.js"></script>
    <script src="public/js/main.js"></script>
    <script src="public/js/registro.js"></script>
  </body>
</html>
