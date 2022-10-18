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
<?php
  require_once 'view/template/header-home.php';
  ?>
    <!-- registro -->
    <main>
    <div class="wrapper">
      <ul class="steps">
        <li class="is-active">Tipo de Empresa</li>
        <li>Datos Personales</li>
        <li>Datos Representantes</li>
        <li>Datos Establecimiento</li>
        <li>Sucursales</li>
        <li>Volumen Ventas</li>
      </ul>
      <form class="form-wrapper">
        <fieldset class="section is-active">
          <h3>Ingrese su tipo de empresa</h3>
             <!-- validar en php -->
             <label for="lang">Lenguaje</label>
      <select name="lenguajes" id="lang">
        <option value="javascript">JavaScript</option>
        <option value="php">PHP</option>
        <option value="java">Java</option>
        <option value="golang">Golang</option>
        <option value="python">Python</option>
        <option value="c#">C#</option>
        <option value="C++">C++</option>
        <option value="erlang">Erlang</option>
      </select>
      <input type="submit" value="Enviar" />

          <div class="button">Next</div>
        </fieldset>
        
        <fieldset class="section">
          <h3>Ingrese sus datos personales</h3>
          <input type="text" name="name" id="name" placeholder="Nombre" required>
          <input type="text" name="lastname" id="lastname" placeholder="Apellido" required>
          <input type="text" name="id_cliente" id="id_cliente" placeholder="Cédula o Passaporte" required>
          <input type="text" name="nacionalidad" id="nacionalidad" placeholder="Nacionalidad" required>
          <input type="text" name="phone" id="phone" placeholder="Télefono" required>
          <input type="text" name="email" id="email" placeholder="Correo" required>
          <!-- PREGUNTAR SERVICIOI -->
          
          <!-- <div class="button" type="reset" value="Borrar" >Borrar</div> -->
          <br>
          <div class="button">Next</div>
        </fieldset>
        
        <fieldset class="section">
        <h3>Ingrese los datos del representante</h3>
          <input type="text" name="name" id="name" placeholder="Nombre" required>
          <input type="text" name="lastname" id="lastname" placeholder="Apellido" required>
          <input type="text" name="id_cliente" id="id_cliente" placeholder="Cédula o Passaporte" required>
          <input type="text" name="ciudad" id="ciudad" placeholder="Ciudadanía" required>
          <input type="text" name="phone" id="phone" placeholder="Télefono" required>
          <input type="text" name="email" id="email" placeholder="Correo" required>
          <!-- <div class="button" type="reset" value="Borrar" >Borrar</div> -->
          <br>
          <div class="button">Next</div>
        </fieldset>
        <fieldset class="section">
          <h3>Establecimiento</h3>
          <input type="text" name="Razon_Social" id="RAZON_SOCIAL" placeholder="Razon Social" required>
          <input type="text" name="RUC_CLIENTE" id="RUC_CLIENTE" placeholder="RUC" required>
          <input type="text" name="id_cliente" id="id_cliente" placeholder="Cédula o Passaporte" required>
          <input type="text" name="ciudad" id="ciudad" placeholder="Ciudadanía" required>
          <input type="text" name="phone" id="phone" placeholder="Télefono" required>
          <input type="text" name="email" id="email" placeholder="Correo" required>
          <div class="button">Reset Form</div>
        </fieldset>
      </form>
    </div>
  </main>
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