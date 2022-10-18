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
        <li class="is-active">Step 1</li>
        <li>Step 2</li>
        <li>Step 3</li>
      </ul>
      <form class="form-wrapper">
        <fieldset class="section is-active">
          <h3>Your Details</h3>
          <input type="text" name="name" id="name" placeholder="Name">
          <input type="text" name="email" id="email" placeholder="Email">
          <div class="button">Next</div>
        </fieldset>
        <fieldset class="section">
          <h3>Account Type</h3>
          <div class="row cf">
            <div class="four col">
              <input type="radio" name="r1" id="r1" checked>
              <label for="r1">
                <h4>Designer</h4>
              </label>
            </div>
            <div class="four col">
              <input type="radio" name="r1" id="r2"><label for="r2">
                <h4>Developer</h4>
              </label>
            </div>
            <div class="four col">
              <input type="radio" name="r1" id="r3"><label for="r3">
                <h4>Project Manager</h4>
              </label>
            </div>
          </div>
          <div class="button">Next</div>
        </fieldset>
        <fieldset class="section">
          <h3>Choose a Password</h3>
          <input type="password" name="password" id="password" placeholder="Password">
          <input type="password" name="password2" id="password2" placeholder="Re-enter Password">
          <input class="submit button" type="submit" value="Sign Up">
        </fieldset>
        <fieldset class="section">
          <h3>Account Created!</h3>
          <p>Your account has now been created.</p>
          <div class="button">Reset Form</div>
        </fieldset>
      </form>
    </div>
  </main>

</body>
</html>