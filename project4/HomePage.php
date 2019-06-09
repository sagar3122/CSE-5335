<?php
require 'mail/PHPMailerAutoload.php';
$errors = array();


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  //Checking if email is not blank
  if(empty($_POST['email']))
  {
    $errors['email1'] = "Your email cannot be empty";
  }
  else
  {
    //Checking if email follows the regular expression
    if(preg_match("/^(.+)@([^\.].*)\.([a-z]{2,})$/", $_POST['email']))
    {

    }
    else{
      $errors['email2'] = "Please enter a valid email id (Ex:abc@xyz.com) ";
    }
  }


}
?>
<?php
try
{
  $connString = "mysql:host=localhost;dbname=sagarsha_leanevento";
  $user = "sagarsha_wp1";
  $pass = "steve@3122HOLMES";

  $pdo = new PDO($connString, $user, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  if(isset($_POST["subscriber"]))
  {
    $email = $_POST['email'];

    if(count($errors) == 0)
    {
      $sql = "INSERT INTO subscriber(Sub_Email) VALUES ('$email')";
      $result = $pdo->query($sql);
      

      // $email = "abhishekbussa9896@gmail.com";
			// $password = "12345678abcd@";
			// $to_id = "$emailid";
			// $message = "Your Password";
			// $subject = "Petstore Password";

      $mail = new PHPMailer;
			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->Port = 587;
			$mail->SMTPSecure = 'tls';
			$mail->SMTPAuth = true;
			$mail->Username = "sagar456745sharma@gmail.com";
			$mail->Password = "12345678Abcd@";

			$mail->addAddress("$email");
			$mail->Subject = "Regarding Subscription";
			$mail->msgHTML("Your subscription for leanavento is activated");

			if (!$mail->send())
				{
					$error = "Mailer Error: " . $mail->ErrorInfo;
					echo '<p id="para">'.$error.'</p>';
				}
			else
				{   
				    // echo "inserted";
					header("Location: subscriberconfirmation.php");
				}
      // header("location: subscriberconfirmation.php");
    }
  }
  $pdo = null;
}
catch (PDOException $e)
{
  die($e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="CSS/leanevent.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <script type="text/javascript">
    //refreence these repeatedly


    function validateform()
    {
      var email = document.getElementById('email').value;
      // document.write(email);
      var errorFlag = false;
      //check email
      var emailReg = /^(.+)@([^\.].*)\.([a-z]{2,})$/;


      if (email == "") {
      // alert("Email must be filled out");
      text = "Email must be filled out";
      errorFlag = true;
      }

      else if(!emailReg.test(email))
      {
        // alert("Please enter a valid email id (Ex:abc@xyz.com)");
        text =  "Please enter a valid email id (Ex:abc@xyz.com)";
        errorFlag = true;
       }

       else
       {
         text = "Email is good";
       }
       document.getElementById("emailmsg").innerHTML = text;
       //if any error occurs cancel submit;due to browser
       //irregularities this has to be done in a variety of ways
       if(errorFlag == false){
          return true;
       }
       else
       {
        // if (e.preventDefault)
        // {
        //   e.preventDefault();
        // }
        // else
        // {
        // e.returnValue = false;
        return false;
        }
       }




  //setup up validations handlers when page is downloaded and ready
  </script>
</head>

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
    <div class="firstimage">
        <img class="banerlean2" src="imagenes/bannerlean2.jpg"	alt="banerlean2"	/>
        <img class="logoblanco" src="imagenes/logo-blanco.png" alt="logoblanco" />
    </div>

    <div class="wrapper">
      <p class="Firstpara"><h4><span>¿QUÉ HACEMOS?</span></h4></p>
      <p class="Secondpara">La asociación civil LEAN fue creada con el objetivo de ayudar, a través de acciones concretas, a nuestros
        conciudadanos en Venezuela ante la grave escasez de medicinas e insumos médicos en que se
        encuentra el país. Nuestra misión consiste en recolectar ayuda médico sanitaria en delegaciones en
        España y, a través de agentes de transporte, llevarlos a Venezuela para que otras asociaciones se
        encarguen de su distribución. De esta manera aportamos nuestro granito de arena ayudando a llevar
        asistencia humanitaria a Venezuela. Somos una asociación sin fines de lucro, dedicada a la defensa de
        los Derechos Humanos</p>
      </div>
      <div class="onbottom">
      <img class="bannerabout" src="imagenes/bannerabout.jpg"	alt="bannerabout"	/>
      <div class="ontop1">
        <p><h3>478 <br>VOLUNTARIOS</h3></p>
        <p><h3>60.000 <br> PERSONAS BENEFICIADAS</h3></p>
        <p><h3>45 <br> ALIADOS</h3></p>
      </div>
      <div class="ontop2">
        <p class="quote"><strong>"La injusticia, en cualquier parte, es una amenaza a la justicia en todas partes.</strong>"</p>
        <p class="subquote"><br><i><sub>Martin Luter King</sub></i></p>
      </div>
      </div>

      <div class="wrapper">
        <p class="Thirdpara">
        <h4 class="aliados"><span>ALIADOS</span></h4>
        </p>
        <img class="sponsorimages1" src="logo/logo1.PNG"	alt="logo1"	/>
        <img class="sponsorimages1" src="logo/logo2.PNG"	alt="logo2"	/>
        <img class="sponsorimages2" src="logo/logo3.PNG"	alt="logo3"	/>
        <img class="sponsorimages2" src="logo/logo4.PNG"	alt="logo4"	/>
    </div>
    <div class="homebuttondiv">
      <button type="button" name="button"><</button>
      <button type="button" name="button">></button>
    </div>
  </main>
<div class="footer">

    <form class="subscribe" action="HomePage.php" method="post" onsubmit="return validateform()">
      <fieldset>
        <label class="subscribelabel" for=""><strong><i class="fa fa-paper-plane-o"></i> &nbsp;Registrese para reciber un <br>boletin</strong></label>
        <input class="subscribetext" type="email" name="email" id="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" placeholder="Introduce tu correo electronico" required>

        <button class="subscribebutton" type="submit" name="subscriber">Suscribir</button>

      </fieldset>
    </form>
    <p id="emailmsg"></p>

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
    if(isset($errors['email1']))
      {
    echo $errors['email1'];
      }
  else if(isset($errors['email2']))
    {
      echo $errors['email2'];
    }
 ?>
