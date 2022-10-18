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
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="public/lib/animate/animate.min.css" rel="stylesheet" />
  <link href="public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
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
        <li>Datos Representante</li>
        <li>Datos Encargado</li>
        <li>Datos Establecimiento</li>
        <li>Sucursales</li>
        <li>Documentación</li>
        <li>Términos y Condiciones</li>
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
          <input type="text" name="telefono" id="phone" placeholder="Télefono" required>
          <input type="text" name="correo" id="email" placeholder="Correo" required>
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
          <label for="lang">¿Es usted, algún familiar suyo o allegado una persona expuesta públicamente (PEP)?</label>
          <select name="Familiar" id="lang">
            <option value="si">Sí</option>
            <option value="no">No</option>
          </select>
          <div class="button">Next</div>
        </fieldset>

        <!-- datos encargados -->
        <fieldset class="section">
        <h3>Ingrese los datos del encargado</h3>
          <input type="text" name="name" id="name" placeholder="Nombre" required>
          <input type="text" name="lastname" id="lastname" placeholder="Apellido" required>
          <input type="text" name="id_encargado" id="id_encargado" placeholder="Cédula o Passaporte" required>
          <input type="text" name="email" id="email" placeholder="Correo" required>
          <!-- <div class="button" type="reset" value="Borrar" >Borrar</div> -->
          <div class="button">Next</div>
        </fieldset>
        
        <!-- establecimiento -->
        <fieldset class="section">
          <h3>Establecimiento</h3>
          <input type="text" name="Razon_Social" id="RAZON_SOCIAL" placeholder="Razon Social" required>
          <input type="text" name="RUC_CLIENTE" id="RUC_CLIENTE" placeholder="RUC" required>
          <input type="text" name="DIV_CLIENTE" id="DIV_CLIENTE" placeholder="div" required>
          <input type="text" name="TIEMPO_OPERACIONAL" id="TIEMPO_OPERACIONAL" placeholder="AAAA-MM-DD" required>
          <input type="text" name="TELEFONO" id="phone" placeholder="Télefono" required>
          <input type="text" name="PAGINA_WEB" id="PAGINA_WEB" placeholder="WWW.WEB.COM">
          <input type="text" name="TIPO_LOCAL" id="NOMBRE" placeholder="Propio/Arrendado" required>
          <input type="text" name="PAIS" id="PAIS" placeholder="PAIS" required>
          <input type="text" name="CIUDAD " id="CIUDAD " placeholder="CIUDAD " required>
          <input type="text" name="PROVINCIA" id="PROVINCIA" placeholder="-PROVINCIA" required>
          <input type="text" name="DISTRITO" id="DISTRITO" placeholder="DISTRITO" required>
          <input type="text" name="BARRIADA" id="BARRIADA" placeholder="BARRIADA"> 
          <input type="text" name="CALLE" id="CALLE" placeholder="CALLE" required>
          <input type="text" name="No.LOCAL" id="LOCAL" placeholder="No.LOCAL" required>
          <div class="button">Next</div>
        </fieldset>

        <!-- sucursales -->
        <fieldset class="section">
        <h3>Ingrese los datos de las sucursales de su empresa</h3>
          <input type="text" name="razon" id="razon" placeholder="Razón Comercial" required>
          <input type="text" name="place" id="place" placeholder="Ubicación" required>
          <input type="text" name="cantidad" id="cantidad" placeholder="Cantidad de dispositivos que requiere en su establecimiento" required>
          <input type="text" name="phone" id="phone" placeholder="Télefono" required>
          <input type="text" name="aporte" id="aporte" placeholder="Promedio de aporte monetario mensual" required>
          <!-- <div class="button" type="reset" value="Borrar" >Borrar</div> -->
          <div class="button">Next</div>
        </fieldset>
        
        <!-- documentos -->
        <fieldset class="section">
        <h3>Ingrese los datos documentos solicitados</h3>
        Cédula o Pasaporte  </label><input type="file" name="identificacion"><br> <br>
        Aviso de Operaciones   </label><input type="file" name="aviso_op"><br><br>
        DGI Impuestos   </label><input type="file" name="dgi"><br><br>
        Inspección Fotografica del la Empresa   </label><input type="file" name="inspeccion"><br><br>
        Firma Digital   </label><input type="file" name="firma"><br><br>
         
          <div class="button">Next</div>
        </fieldset>

        <!-- terminos y condiciones -->
        <fieldset class="section">
        <h3>Lea cuidadosamente y verifique los parámetros descritos a continuación</h3>
        <h5>AFILIACIÓN A LOS SISTEMAS</h5>
        <div class="wrapper"><p>Quien(es) suscribe(n) suficientemente identificado(s) en la presente solicitud declaro(amos) que: Conozco(conocemos) y acepto(amos) que la misma se rige por el Contrato que regula términos y condiciones para la instalación de los Puntos de Ventas para la aceptación de las tarjetas de crédito o tarjeta de débito emitidas o no por el Banco, el cual acepto(amos) conocer en todo su alcance y contenido por cuanto me(nos) fue entregado previamente. Acepto (amos) expresamente que el Banco podrá llevar a cabo cualquier notificación a mi (nuestra) representante a través de la dirección de correo electrónico indicada en la presente Solicitud, Finalmente declaro (amos) que, son ciertos los datos suministrados en la presente Solicitud de Afiliación al Servicio de Adquirencia, autorizando a Banesco a verificar los mismos.</p></div><br><br>
        <h5>AUTORIZACIÓN PARA REFERENCIAS DE LA ASOCIACIÓN PANAMEÑA DE CRÉDITO (APC)</h5>
        <div class="wrapper"><p>Por este medio autorizo(amos) expresamente a Banesco, S. A., sus subsidiarias y/o afiliadas, cesionarios o sucesoras, así como cualquier compañía que por operación de cesión, administración o compra de cartera adquiera los derechos de mi crédito, a que de conformidad con lo expresado en el artículo 24 y demás disposiciones aplicables de la Ley 24 de 22 de mayo de 2002, solicite, consulte, recopile, intercambie y trasmita a cualquier agencia de información de datos, bancos o agentes económicos informaciones relacionadas con obligaciones o transacciones crediticias que mantengo o pudiera mantener con dichos agentes económicos de la localidad, sobre mi(nuestros) historial de crédito y relaciones con acreedores.
        También queda facultado Banesco, S. A., sus subsidiarias y/o afiliadas, cesionarios o sucesoras, así como cualquier compañía que por una operación de cesión, administración o compra de cartera adquiera los derechos de mi crédito, a que solicite y obtenga información de instituciones gubernamentales relacionadas con las obligaciones o transacciones crediticias arriba referidas.
        Asimismo, exonero(amos)de cualquier consecuencia o responsabilidad resultante del ejercicio de solicitar o suministrar información, o por razón de cualesquiera autorizaciones contenidas en la presente carta, a Banesco, S. A., a sus compañías afiliadas, subsidiarias, cesionarios y/o sucesoras, a sus empleados, ejecutivos, directores dignatarios o apoderados, así como cualquier compañía que por una operación de cesión, administración o compra de cartera adquiera los derechos de mi crédito.</p><br>
        <p><b>QUEDA ENTENDIDO QUE EL BANCO SUMINISTRARÁ A REQUERIMIENTO DEL INTERESADO TODA LA INFORMACIÓN CREDITICIA RECOPILADA EN BASE A LA PRESENTE AUTORIZACIÓN.
        </b></p></div><br><br>
         
          <div class="button">Next</div>
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