<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" href="CSS/leanevent.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<body id="body">
<div id="wrapper">
<header>
  <div class="header">
    <img class="faviconimg" style="width: 5%;
  height: 5%;
  margin-top: 1%;" src="imagenes/logo-blanco.png" alt="logo" />
    <h1>LEANEVENTOS</h1>
    <nav style=" margin-left: 10%; margin-top: 2%;">
      <ul style=" font-size: 10px;">
        <li><a 	href="HomePage.php">Inicio</a></li>
        <li><a	href="About.php">Quienes somos</a></li>
        <li><a	href="http://sagarsharma.uta.cloud/blog/">Blog</a></li>
        <li><a	href="Signup.php">Registrate</a></li>
        <li><a	href="Contact.php">Contacto</a></li>
        <li><a	href="Login.php">Iniciar Sesion</a></li>
        <li><a	href="BuyFromUs1.php">Comprar Boletos</a></li>
      </ul>
    </nav>
  </div>
</header>
  <main>
    <div class="imagediv">
    <img class="bannercontacto"src="imagenes/bannerregistro.jpg" alt="bannerregistro">
    <div style="margin-left: 32%; margin-top: 5%; " class="textdiv">
      <p style="font-size: 23px; margin:0 0 2px 20px;"><strong>REGISTRATE</strong></p>
      <div style="display: inline-flex; margin-left: 25px;  "class="">
        <nav style="margin: 0; font-size: 12px; width:100%; overflow:hidden;">
          <ul style="margin: 0; padding: 0 ">
            <li><a 	href="HomePage.php">INICIO</a></li>
            <li><a	href="Signup.php">REGISTRATE</a></li>
          </ul>

        </nav>
      </div>
    </div>
    </div>
    <div class="signupbox">
      <div class="innersignupbox">
        <p><br>Elija el tipo de usuario para registrarse</p>
        <hr style="color: lightgrey;">
        <div class="innerbuttonline">
          <button  class="button1" type="button" onclick="window.location.href = 'Individual.php';" name="button" type="submit">Como individual</button>
          <button style="width: 28%; height: 40px;  " class="button1" onclick="window.location.href = 'Business.php';" type="submit" name="button">Como Negocio o Fundacion</button>
          <button style="width: 19%; height: 40px; "class="button1" onclick="window.location.href = 'Agentlean.php';" type="submit" name="button">Como agente LEAN</button>
        </div>
      </div>
    </div>
    </main>
    <div class="footerbottom">
      <p class="pfooterbottom"><strong>LEAN EN LAS REDES SOCIALES</strong></p>
      <div class="sociallogos">
        <p class="tfiicons"><i class="fa fa-twitter"></i></p>
        <p class="tfiicons"><i class="fa fa-facebook"></i></p>
        <p class="tfiicons"><i class="fa fa-instagram"></i></p>
      </div>
      <div>
        <footer>
          <div class= "lowestfooter1">
          <p><br>Copyright &copy2019 All rights reserved | This web is made with &#9825; by <span style="color: #FFC300;">DiazApps</span></p>
          </div>
          <div class="lowestfooter2">
          <button class="button1" type="button" name="button">&#8593;</button>
          </div>


        </footer>
      </div>
    </div>
    </div>
      </body>
      </html>
