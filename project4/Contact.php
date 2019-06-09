<?php
  $errors = array();
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    if(empty($_POST['fname']))
    {
      $errors['fname1'] = "Your first name can not be empty";
    }
    else
    {
      if(preg_match("/^([A-Za-z ]+)$/",$_POST['fname']))
      {

      }
      else
      {
        $errors['fname2'] = "first name can only contain letters";
      }
    }

    if(empty($_POST['lname']))
    {
      $errors['lname1'] = "Your last name can not be empty";
    }
    else
    {
      if(preg_match("/^([A-Za-z ]+)$/",$_POST['lname']))
      {

      }
      else
      {
        $errors['lname2'] = "last name can only contain letters";
      }
    }
    if(empty($_POST['email']))
    {
      $errors['email1'] = "Your Email can not be empty";
    }
    else
    {
      if(preg_match("/^(.+)@([^\.].*)\.([a-z]{2,})$/", $_POST['email']))
      {

      }
      else
      {
        $errors['email2'] = "Please enter a valid email id (Ex:abc@xyz.com)";
      }
    }
    if(empty($_POST['topic']))
    {
      $errors['topic1'] = "Please enter a topic";
    }
  }
?>
<?php
  //data base connection
 $db = mysqli_connect('localhost','sagarsha_wp1','steve@3122HOLMES','sagarsha_leanevento');

  //connection error handling
  $error = mysqli_connect_error();
  if ($error != null)
  {
  $output = "<p>Unable to connect to database</p>" . $error;
  exit($output);
  }
  if(isset($_POST['contact_us']))
  {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $topic = $_POST['topic'];
    $message = $_POST['message'];

    if(count($errors) == 0)
    {
      $sql = "INSERT INTO contact_us(First_name,Last_name,Email_ID,Contact_Topic,Contact_Message) VALUES ('$fname','$lname','$email','$topic','$message')";
      $result = mysqli_query($db, $sql);
      //echo "inserted";
      header("location: contactusconfirmation.php");
      exit();
    }
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
      var fname = document.getElementById('fname').value;
      var lname = document.getElementById('lname').value;
      var topic = document.getElementById('topic').value;
      // document.write(email);
      var errorFlag = false;
      //check email
      var emailReg = /^(.+)@([^\.].*)\.([a-z]{2,})$/;
      var nameReg = /^([A-Za-z ]+)$/;


      if (email == "") {
      // alert("Email must be filled out");
      etext = "Email must be filled out";
      errorFlag = true;
      }

      else if(!emailReg.test(email))
      {
        // alert("Please enter a valid email id (Ex:abc@xyz.com)");
        etext =  "Please enter a valid email id (Ex:abc@xyz.com)";
        errorFlag = true;
       }

       else
       {
         etext = "Email is good";
       }

       if (fname == "") {
       // alert("Email must be filled out");
       ftext = "first name must be filled out";
       errorFlag = true;
       }

       else if(!nameReg.test(fname))
       {
         // alert("Please enter a valid email id (Ex:abc@xyz.com)");
         ftext =  "first name can only contain letters";
         errorFlag = true;
        }

        else
        {
          ftext = "first name is good";
        }
        if (lname == "") {
        // alert("Email must be filled out");
        ltext = "last name must be filled out";
        errorFlag = true;
        }

        else if(!nameReg.test(lname))
        {
          // alert("Please enter a valid email id (Ex:abc@xyz.com)");
          ltext =  "last name can only contain letters";
          errorFlag = true;
         }

         else
         {
           ltext = "last name is good";
         }
         if (topic == "") {
         // alert("Email must be filled out");
         ttext = "topic must be filled out";
         errorFlag = true;
         }

         else if(!nameReg.test(topic))
         {
           // alert("Please enter a valid email id (Ex:abc@xyz.com)");
           ttext =  "topic can only contain letters";
           errorFlag = true;
          }

          else
          {
            ttext = "topic is good";
          }
       document.getElementById("emailmsg").innerHTML = etext;
       document.getElementById("fnamemsg").innerHTML = ftext;
       document.getElementById("lnamemsg").innerHTML = ltext;
       document.getElementById("topicmsg").innerHTML = ttext;
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
    <div class="imagediv">
    <img class="bannercontacto"src="imagenes/bannercontacto.jpg" alt="bannercontacto">
    <div style="margin-left: 33%; margin-top:4%;" class="textdiv">
      <p style="font-size: 22px; margin:0 0 2px 10px;"><strong>CONTACTO</strong></p>
      <div style="margin-left: 5px; margin-top: 5px;  "class="">
      <nav style="margin: 0; font-size: 12px; width:100%; overflow:hidden;">
        <ul style="margin: 0; padding: 0 ">
          <li><a 	href="HomePage.php">INICIO</a></li>
          <li><a	href="Contact.php">CONTACTO</a></li>
        </ul>

      </nav>
      </div>
      </div>
      </div>
      <div class="outercontact">
        <div class="contactinfo">
          <p style="font-size: 18px; "><strong>Informacion del contacto</strong></p>
          <div class="contactlistdiv">
            <p>&#9733; 198 West 21th Street,<br> Suite 721 New York NY 10016</p>
            <p>&#9733; + 1235 2355 98</p>
            <p>&#9733; info@diazapps.com</p>
            <p>&#9733; diazapps.com</p>
          </div>
          <p style="font-size: 18px;"><strong>LEAN en las redes sociales</strong></p>
          <div class="contactlogodiv">
            <div class="contactlogodivlist">
                <img src="logo/facebook.png" alt="">
                <p>LEAN Ayuda Humanitaria</p>
            </div>
            <div class="contactlogodivlist">
              <img src="logo/twitter.png" alt="">
              <p>@LeanEmergente</p>
            </div>
            <div class="contactlogodivlist">
              <img src="logo/instagram.png" alt="">
              <p>@LeanAyudaHumanitaria</p>
            </div>
            <div class="contactlogodivlist">
              <img src="logo/correo.png" alt="">
              <p>lean.emergemte@gmail.com</p>
            </div>
          </div>
          <form action ="Contact.php" onsubmit="return validateform()" method ="post">
          <div class="contactformdiv">
            <div class="contactformdiv1">

              <p style="margin-top: 20px; font-size: 18px;"><strong>Estar en contacto</strong></p>
              <div class="contactformline1">
                <div class="contact11">
                  <label for="">Nombre</label>
                  <input type="text" name="fname" id="fname" value="<?php if(isset($_POST['fname'])) echo $_POST['fname'];  ?>" placeholder="Tu Nombre" required>
                  <p id="fnamemsg"> </p>
                </div>
                <div class="contact12">
                  <label for="">Apellido</label>
                  <input type="text" name="lname" id="lname" value="<?php if(isset($_POST['lname'])) echo $_POST['lname'];  ?>" placeholder="Tu Apellido" required>
                  <p id="lnamemsg"> </p>

                </div>
              </div>
              <label for="">Correo</label><br>
              <input style="width: 95%; margin-bottom: 20px; " type="text" name="email" id="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];  ?>" placeholder="Tu correo electronico" required>
              <p id="emailmsg"></p>
              <label for="">Tema</label><br>
              <input style="width: 95%; margin-bottom: 20px;" type="text" name="topic" id="topic" value="<?php if(isset($_POST['topic'])) echo $_POST['topic'];  ?>" placeholder="Su asunto de este mensaje" required>
              <p id="topicmsg"> </p>
              <label for="">Mensaje</label><br>
              <textarea style="width: 95%; margin-bottom: 20px;" name="message" id="message" rows="8" cols="80" placeholder="Di algo sobre nosotros"></textarea>
              <button style="margin-left: 35%; margin-bottom: 50px; width: 130px; " class="button1" type="submit" name="contact_us">Enviar mensaje</button>
            </div>

          </div>
        </form>
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


<?php
    if(isset($errors['fname1']))
      {
    echo $errors['fname1'];
      }
  else if(isset($errors['fname2']))
    {
      echo $errors['fname2'];
    }
?>
<?php
    if(isset($errors['lname1']))
      {
    echo $errors['lname1'];
      }
  else if(isset($errors['lname2']))
    {
      echo $errors['lname2'];
    }
?>
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
<?php
    if(isset($errors['topic1']))
      {
    echo $errors['topic1'];
      }
?>
