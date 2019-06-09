<?php
  $email_pass = $_GET['email'];

  $product_description = $_GET['Product_Description'];
  $product_price = $_GET['Product_Price'];
  // echo $product_description;
  // echo $product_price;

  $db = mysqli_connect('localhost','sagarsha_wp1','steve@3122HOLMES','sagarsha_leanevento');

  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $errors = array();
    if(empty($_POST['quant']))
    {
      $errors['quant1'] = "quantity can not be empty";
    }
  }
   ?>
<?php
   if(isset($_POST['buy_from_us']))
   {
     $quant = $_POST['quant'];

     if(count($errors) == 0)
     {

       $sql = "INSERT INTO buy_from_us_order(Product_Description, Product_Price, Order_quantity, User_Email)
               VALUES('$product_description','$product_price','$quant','$email_pass')";

       // echo $sql;
       mysqli_query($db, $sql);
       // echo $sql;
       // echo "it's inserting";
        header("location:orderconfirmation.php?email=".$email_pass);
     }
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
          <li><a	href="BuyFromUs1.php?email=<?php echo $email_pass; ?>">COMPRAR BOLETOS</a></li>
        </ul>

      </nav>
      </div>
      </div>
    </div>
      <div class="buyfromus2div1">
        <div class="leftbuyfromus">
          <img src="imagenes/minibaner4.jpg" alt="minibaner4">
        </div>
        <div class="rightbuyfromus">
          <p style="margin-top: 0; "><strong><?php echo $_GET['Product_Description']; ?></strong></p>
          <p> <strong>$<?php echo $_GET['Product_Price']; ?></strong><span style="color: #FFC300; margin-left:55%; ">&#9733;&#9733;&#9733;&#9733;&#9733;</span> <span style="font-weight: lighter; font-size: 12px;" ><small>(74 Ratings)</small></span> </p>
          <p style="font-weight: lighter; font-size: 12px; margin-bottom: 25px; ">iLa fe no se puede perder JAMAS! Es imprescindible para todo en nuestras vidas,
          poco a poco las cosas iran mejorando.No cambiaran de la noche  a la  manana, pero van  a cambiar y solo cambiaran si te
          lo propones.Si hoy tuvimos un mal dia, nuestra meta sera tener uno mejor manana. Es basicamente hacer nuestra la frase
          "Hoy no me dare por vencido",repitela todos los dias, hazla parte de tu filosofia de vida.<br></p>
          <p style="font-weight: lighter; font-size: 12px; ">Numero De Entrades</p>
          <form action = "BuyFromUs2.php?Product_Description=<?php echo $product_description;?>&email=<?php echo $email_pass; ?>&Product_Price=<?php echo $product_price;?>" method = "post">
          <div style="display: inline-flex; margin-top: 5px; "class="">
            <button class="smallbuyfromusbuttons" type="" name="button">-</button>
            <input style="margin-left: 20px; margin-right: 20px; margin-top: 10px; " type="number" name="quant" value="" placeholder="1">
            <!-- <p style="margin-left: 20px; margin-right: 20px; margin-top: 10px; ">1</p> -->
            <button class="smallbuyfromusbuttons" type="" name="button">+</button>
          </div>
          <!-- <input type="hidden" name="" value="<?php echo "$product_description";  ?>"> -->
          <!-- <input type="hidden" name="" value="<?php echo "$product_price"; ?>"> -->
          <div style="margin-top: 10px; ">
          <button style="border-radius: 0; height: 35px; width: 100px;" class="button1" type="submit" name="buy_from_us">&#128722; Comprar</button>
          </div>
        </form>
        </div>

      </div>
      <div class="lowerbuyfromus">
        <button  class="button1" type="button" name="button">DESCRIPTION</button>
        <button style="background-color: lightgrey; "  class="button1" type="button" name="button">Encargados</button>
        <button style="background-color: lightgrey; "  class="button1"type="button" name="button">PATROCINANTES</button>
        <div style="font-weight: lighter; font-size: 14px; padding: 10px 20px 10px 30px; " class="buyfromusblock">
          <p>Recien he comenzado a leer un libro cuyo mensaje principal es aprender a buscar ese  algo mejor todos los dias.El libro esta escrito
            por una persona que vive con diabetes tipo 1 y nos presenta como los adelantos en tratamientos technologia ,aunque no han curado su
            condicion, dia tras dia mejoran su calidad de vida.<br><br>
            Busqemos siempre mejorar algo en nuestras vidas , mantengamos el deseo de progresar, de educarnos mas acerca de la condicion de nuestros
            hijos y veras como poco a poco comenzaromos a entenderla mejor.</p>

        </div>

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



 <?php
     if(isset($errors['quant1']))
       {
     echo $errors['quant1'];
       }
 ?>
