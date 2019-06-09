<?php
  $email_pass = $_GET['email'];
  ?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" href="CSS/leanevent.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <li><a	href="BuyFromUs1.php?email=<?php echo $email_pass; ?>">Comprar Boletos</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <main>
    <div class="imagediv">
    <img class="bannercontacto"src="imagenes/bannercboleto.jpg" alt="bannercboleto">
    <div style="margin-left: 33%; margin-top:4%;" class="textdiv">
      <p style="font-size: 22px; margin:0 0 2px 0px;"><strong>COMPRAR BOLETOS</strong></p>
      <div style="margin-left: 10px; margin-top: 5px;" class="">
      <nav style="margin: 0; font-size: 12px; width:100%; padding: 0; overflow:hidden;">
        <ul style="margin: 0; padding: 0; ">
          <li><a 	href="HomePage.php">INICIO</a></li>
          <li><a	href="BuyFromUs1.php?email=<?php echo $email_pass; ?>">COMPRAR BOLETOS</a></li>
        </ul>

      </nav>
      </div>
      </div>
    </div>
      <div class="buyfromus2div1">

          <p style="margin-top: 100px; margin-bottom: 200px; margin-left: 200px;"> Thank You, your order has been placed!</p>
      </div>


</main>
<div class="footer">

    <form class="subscribe" action="index.html" method="post">
      <fieldset>
        <label class="subscribelabel" for=""><strong><i class="fa fa-paper-plane-o"></i> &nbsp;Registrese para reciber un <br>boletin</strong></label>
        <input class="subscribetext" type="text" name="" value="" placeholder="Introduce tu correo electronico">
        <button class="subscribebutton" type="button" name="button">Suscribir</button>
      </fieldset>
    </form>
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
</div>
</body>
</html>
