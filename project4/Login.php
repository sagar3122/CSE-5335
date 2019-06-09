<?php
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$errors = array();

		//Validation

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
			else
			{
				$errors['email2'] = "Please enter a valid email id (Ex:abc@xyz.com)";
			}
		}
		//Checking if password is blank
		if(empty($_POST['password']))
		{
			$errors['password1'] = "Your password cannot be empty";
		}
		else
		{
			if(preg_match("/^[a-zA-Z]\w{8,16}$/",$_POST['password']))
			{

			}
			else
			{
				$errors['password2'] = "Your password must be at least 8 characters but no more than 16 characters long.";

			}
		}

	}
?>
<?php
	include('server.php');
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
      var password = document.getElementById('password').value;
      // document.write(email);
      var errorFlag = false;
      //check email
      var emailReg = /^(.+)@([^\.].*)\.([a-z]{2,})$/;
      var passwordReg = /^[a-zA-Z]\w{8,16}$/;


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

       if (password == "") {
       // alert("Email must be filled out");
       ptext = "password must be filled out";
       errorFlag = true;
       }

       else if(!passwordReg.test(password))
       {
         // alert("Please enter a valid email id (Ex:abc@xyz.com)");
         ptext =  "The password must be at least 8 characters but no more than 16 characters long.";
         errorFlag = true;
        }

        else
        {
          ptext = "password format is good";
        }

       document.getElementById("emailmsg").innerHTML = etext;
       document.getElementById("passwordmsg").innerHTML = ptext;
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
        }
        return false;
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
    <img class="bannercontacto"src="imagenes/bannerlogin.jpg" alt="bannerlogin">
    <div style="margin-left: 33%; margin-top: 5%; " class="textdiv">
      <p style="font-size: 23px; margin:0 0 2px 10px;"><strong>INICIAR SESION</strong></p>
      <div style="display: inline-flex; margin-left: 20px;  "class="">
        <nav style="margin: 0; font-size: 12px; width:100%; overflow:hidden;">
          <ul style="margin: 0; padding: 0 ">
            <li><a 	href="HomePage.php">INICIO</a></li>
            <li><a	href="Login.php">INICIAR SESION</a></li>
          </ul>

        </nav>
      </div>
    </div>
    </div>
    <form action = "Login.php" onsubmit="return validateform()" method = "Post">
    <div class="smallbox">
      <div class="innersmallbox">

        <p style="font-size: 18px; padding-top: 20px; ">Iniciar Sesion</p>
        <div class="smallboxinline">
          <div class="smallboxinline1">
            <label style="font-size: 12px; "for="">Nombre de Usuario <br> </label>
            <input type="email" name="email" id="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" placeholder="Nombre de Usuario o Correo" required>
						<p id="emailmsg"> </p>
					</div>
          <div class="smallboxinline2">
            <label style="font-size: 12px; " for="">Contrasena <br> </label>
            <input type="password" name="password" id="password" value="" placeholder="Contrasena" required>
						<p id="passwordmsg"> </p>
          </div>

        </div>
        <p style="margin-left: 35%; margin-top: 30px;  color: #FFC300; ">Olvido su contrasena?</p>
				<button style='width: 80px; margin-left: 40%; margin-bottom: 50px;' class='button1'type='submit' name='login'>Entra</button>


      </div>
    </div>
  </form>
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
      if(isset($errors["email1"]))
      {
        echo $errors["email1"];
      }
      else if(isset($errors["email2"]))
      {
        echo $errors["email2"];
      }
       ?>
       <?php
       if(isset($errors["password1"]))
       {
         echo $errors["password1"];
       }
       else if(isset($errors["password2"]))
       {
         echo $errors["password2"];
       }
        ?>
        <?php
        if(isset($errors["email3"]))
        {
          echo $errors["email3"];
        }
         ?>
