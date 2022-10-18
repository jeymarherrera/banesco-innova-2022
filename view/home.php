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
  </head>

  <body>
    <?php
    require_once 'view/template/header.php';
    ?>
    
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
    <div class="main">
    <h2>Formulario 1</h2>
      <form action="form2.php" method="post">
    <label>Nombre :</label>
    <input name="nombre" type="text" placeholder="nombre y apellido" required>
    <label>Email :</label>
    <input name="email" type="email" placeholder="mimail@dominio.com" required>
    <label>Domiclio :</label>
    <input name="domicilio" type="text" placeholder="calle y numero" required>
    <label>Telefono :</label>
    <input name="telefono" type="text" placeholder="999 999 999" />
    <label>Telefono movil :</label>
    <input name="movil" type="text" placeholder="+34999999999" >
    <input type="reset" value="Borrar" />
    <input type="submit" value="Siguiente" />
    </form>
    </div>
    </div>

    <!-- footer -->
    <?php
    require_once 'view/template/footer.php';
    ?>

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
  </body>
</html>
