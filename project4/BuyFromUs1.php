<?php
  $email_pass = $_GET['email']; ?>
<?php
//connect db with PDO
  try
  {
   $connString = "mysql:host=localhost;dbname=sagarsha_leanevento";
  $user = "sagarsha_wp1";
  $pass = "steve@3122HOLMES";

    $pdo = new PDO($connString,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // $id = 0;
    // $results = array();
    // for ($id = 1; $id < 5; $id++)
    // {
      $sql = "SELECT Product_Description, Product_Price FROM buy_from_us";
      $results = $pdo->query($sql);
      // echo "Yes</br>";
      // $results[$id] = $result;
    // }
    // printf(var_dump($results));
    // $sql1 = "SELECT Product_Description, Product_Price FROM buy_from_us WHERE Product_ID = 1";
    // $result1 = $pdo->query($sql1);
    //
    // $sql2 = "SELECT Product_Description, Product_Price FROM buy_from_us WHERE Product_ID = 2";
    // $result2 = $pdo->query($sql2);
    //
    // $sql3 = "SELECT Product_Description, Product_Price FROM buy_from_us WHERE Product_ID = 3";
    // $result3 = $pdo->query($sql3);
    //
    // $sql4 = "SELECT Product_Description, Product_Price FROM buy_from_us WHERE Product_ID = 4";
    // $result4 = $pdo->query($sql4);

  }
  catch (PDOException $e)
  {
    die($e->getMeassage());
  }
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
            <li><a	href="BuyFromUs1.php?email=<?php echo $email_pass; ?>">Comprar Boletos</a></li>
          </ul>

        </nav>
        </div>
        </div>
      </div>
      <p style="margin-top: 100px; "><h4 class="bfuh4"><span>NUESTRO EVENTOS</span></h4></p>
      <p class="bfuquote">Tu asistencia es importante para nosotros visitanos en los eventos qu estamos realizando.</p>
      <div class="imagecollection">
        <?php
        while($row = $results->fetch())
        {
          $product_description = $row['Product_Description'];
          $product_price = $row['Product_Price'];

        echo "<div class='bfufirstimage'>";
        echo "<div class='newdiv'>";
        echo  "<p>New</p>";
        echo    "</div>";
        echo  "<a href = 'BuyFromUs2.php?email=$email_pass&Product_Description=$product_description&Product_Price=$product_price'><img src='imagenes/minibaner4.jpg' alt='minibaner4'> </a>";
        // echo "<a href='index.php?choice=search&cat=".urlencode($cat)."&subcat=".urlencode($subcat)."&srch=".urlencode($srch)."&page=".urlencode($next)."'> Next </a>";

        echo "<p>".$row['Product_Description']."</p>";
        echo "<p style='color:#FFdb58;'>$".$row['Product_Price']."</p>";
        echo "</div>";
           }

            ?>

        <!-- <div class="bfufirstimage">
          <div class="newdiv">
            <p>New</p>
          </div>
          <a href = "BuyFromUs2.html"><img src="imagenes/minibaner1.jpg" alt="minibaner1"> </a>

        </div>
        <div class="bfufirstimage">
          <div class="newdiv">
            <p>New</p>
          </div>
          <a href = "BuyFromUs2.html"><img src="imagenes/minibaner2.jpg" alt="minibaner2"> </a>

        </div>
          <div class="bfufirstimage">
            <div class="newdiv">
              <p>New</p>
            </div>
          <a href = "BuyFromUs2.html">  <img src="imagenes/minibaner3.jpg" alt="minibaner3"> </a>

          </div> -->
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
