<?php
  $email_pass = $_GET['email']; ?>
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
          <nav style=" margin-left: 20%; margin-top: 2%;">
            <ul style=" font-size: 10px;">
              <li><a 	href="HomeAgentLean.php?email=<?php echo $email_pass; ?>">Inicio</a></li>
              <li><a	href="ListIndividual.php?email=<?php echo $email_pass; ?>">Lista de Voluntarios</a></li>
              <li><a	href="ListBusiness.php?email=<?php echo $email_pass; ?>">Lista de Fundacion</a></li>
              <li><a	href="ListEvents.php?email=<?php echo $email_pass; ?>">Eventos</a></li>
              <li><a href="ProfileAgentSubMenu.php?email=<?php echo $email_pass; ?>"> Agente</a></li>
            </ul>
          </nav>
        </div>
      </header>
  <main>
    <div style="margin-bottom: 100px;  " class="firstimage">

        <img class="banerlean2" src="imagenes/bannerlean1.jpg"	alt="bannerlean1"	/>

      <img class="logoblanco" src="imagenes/logo-blanco.png" alt="logo-blanco" />
    </div>


  </main>
  <div class="footerbottom">
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
