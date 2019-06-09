<?php
    $email_pass = $_GET['email'];
    // echo $email_pass;
$db = mysqli_connect('localhost','sagarsha_wp1','steve@3122HOLMES','sagarsha_leanevento');
  // session_start();
  $sql = "SELECT * FROM events WHERE U_Email = '$email_pass'";
  $results = mysqli_query($db, $sql);

  ?>

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
        <!-- <nav style="margin-left: 55%; width:14%; "> -->
        <nav style=" margin-left: 40%; margin-top: 2%; width: 35%;">
          <ul style=" font-size: 10px;">
            <li><a 	href="HomeIndividual.php?email=<?php echo $email_pass; ?>">Inicio</a></li>
              <li><a	href="BuyFromUs1.php?email=<?php echo $email_pass; ?>">Comprar Boletos</a></li>
            <li><a href="ProfileIndividual.php?email=<?php echo $email_pass; ?>">Individual</a></li>
          </ul>
        </nav>
      </div>
    </header>
  <main>
    <table>
      <caption>Lista de Eventos</caption>
      <thead>
        <tr>
          <th style="text-align: center;" colspan="10">Detalles Del Eventos</th>
          <th style="text-indent: 15px;">Lugar</th>
          <th style="text-indent: 5px;">Fecha</th>
          <th>Hora</th>
          <th style="text-indent: 5px;">Asistencia</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while($row = mysqli_fetch_assoc($results))
        {
        echo  "<tr>
            <td> <img src='imagenes/minibaner1.jpg' alt='minibanner1'> </td>
            <td>".$row["E_Name"]."</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>".$row["E_place"]."</td>
            <td>".$row["E_date"]."</td>
            <td>".$row["E_hour"]."</td>
            <td> <button style='width: 80%; height: 35px; ' class='button1' type='button' name='button'>
              Confirmar
            </button></button> </td>
          </tr>";
        }

?>
        <!-- // <tr>
        //   <td> <img src="imagenes/minibaner2.jpg" alt="minibanner2"> </td>
        //   <td>Nombre del Evento y sus detalles</td>
        //   <td>&nbsp;</td>
        //   <td>&nbsp;</td>
        //   <td>&nbsp;</td>
        //   <td>&nbsp;</td>
        //   <td>&nbsp;</td>
        //   <td>&nbsp;</td>
        //   <td>&nbsp;</td>
        //   <td>&nbsp;</td>
        //   <td>Direccion del lugar</td>
        //   <td>14/01/2019</td>
        //   <td>8 AM</td>
        //   <td> <button style="width: 80%; height: 35px;" class="button1" type="button" name="button">
        //     Confirmar
        //   </button></button> </td>
        // </tr>
        // <tr>
        //   <td> <img src="imagenes/minibaner3.jpg" alt="minibanner3"> </td>
        //   <td>Nombre del Evento y sus detalles</td>
        //   <td>&nbsp;</td>
        //   <td>&nbsp;</td>
        //   <td>&nbsp;</td>
        //   <td>&nbsp;</td>
        //   <td>&nbsp;</td>
        //   <td>&nbsp;</td>
        //   <td>&nbsp;</td>
        //   <td>&nbsp;</td>
        //   <td>Direccion del lugar</td>
        //   <td>14/01/2019</td>
        //   <td>8 AM</td>
        //   <td> <button style="width: 80%; height: 35px;" class="button1" type="button" name="button">
        //     Confirmar
        //   </button></button> </td>
        // </tr> -->
      </tbody>
    </table>
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
