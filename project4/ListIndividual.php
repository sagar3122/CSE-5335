<?php
  $email_pass = $_GET['email'];
 ?>
<!DOCTYPE html>
<html lang="en">

<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" href="CSS/leanevent.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <body id="body">
    <div id="wrapper">
    <header><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
      <div class="header">
          <img class="faviconimg" style="width: 5%;
  height: 5%;
  margin-top: 1%;" src="imagenes/logo-blanco.png" alt="logo" />
        <h1>LEANEVENTOS</h1>
        <!-- <nav style="margin-left: 28%; width:48%;"> -->
        <nav style=" margin-left: 21%; margin-top: 2%; width: 48%;">
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
    <table style="margin-bottom: 20px;">
      <caption>Lista de Voluntarios</caption>
      <thead>
        <tr>
          <th style="text-align: center;" colspan="10">Nombre de Voluntario</th>
          <th style="text-indent: 15px;">Correo</th>
          <th style="text-indent: 5px;">Telefono</th>
          <th style="text-align:center; ">Evento</th>
          <th style="text-indent: 5px;">Responsable</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td> <img src="imagenes/user.png" alt="user"> </td>
          <td>Nombre del Voluntario</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>Direccion</td>
          <td>0000-000000</td>
          <td>Nombre del Evento</td>
          <td style="text-align: center;">Nombre del <br> Responsable
          </td>
        </tr>

        <tr>
          <td> <img src="imagenes/user.png" alt="user"> </td>
          <td>Nombre del Voluntario</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>Direccion</td>
          <td>0000-000000</td>
          <td>Nombre del Evento</td>
          <td style="text-align: center; ">Nombre del <br> Responsable
          </td>
        </tr>
        <tr>
          <td> <img src="imagenes/user.png" alt="user"> </td>
          <td>Nombre del Voluntario</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>Direccion</td>
          <td>0000-000000</td>
          <td>Nombre del Evento</td>
          <td style="text-align: center;">Nombre del <br> Responsable
          </td>
        </tr>
      </tbody>
    </table>
    <div class="aftertable">
      <div class="insidediv">

        <button class="pinsidediv"type="button" name="button"><<</button>
      </div>
      <div class="insidediv">
        <!-- <p class="pinsidediv" style="">1</p> -->
        <button class="pinsidediv" type="button" name="button">1</button>
      </div>
      <div class="insidediv">
        <!-- <p class="pinsidediv">2</p> -->
        <button class="pinsidediv"type="button" name="button">2</button>
      </div>
      <div class="insidediv">
        <!-- <p class="pinsidediv">3</p> -->
        <button class="pinsidediv" type="button" name="button">3</button>
      </div>
      <div class="insidediv">
        <!-- <p class="pinsidediv">4</p> -->
        <button class="pinsidediv"type="button" name="button">4</button>
      </div>
      <div class="insidediv">
        <!-- <p class="pinsidediv">>></p> -->
        <button class="pinsidediv"type="button" name="button">>></button>
      </div>


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
