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
$results = array();
$email_pass = $_GET['email'];
// echo $email_pass;
$sql = "SELECT * FROM users WHERE U_Email = '$email_pass'";
// echo $sql;
$results = mysqli_query($db, $sql);
// var_dump($results);
 ?>

<?php

// session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $errors = array();
  if(empty($_POST['fname']))
  {
    $errors['fname1'] = "first name can not be empty";
  }
  else
  {
    if(preg_match("/^([A-Za-z ]+)$/",$_POST['fname']))
    {

    }
      else
      {
      $errors['fname2'] = "first name should all be characters";
      }
  }
  if(empty($_POST['lname']))
  {
    $errors['lname1'] = "last name can not be empty";
  }
  else
  {
   if(preg_match("/^([A-Za-z ]+)$/",$_POST['lname']))
   {

   }
   else
   {
       $errors['lname2'] = "last name should all be characters";
   }
 }
  if(empty($_POST['email']))
  {
    $errors['email1'] = "Your email cannot be empty";
  }
  else
  {
    if(preg_match("/^(.+)@([^\.].*)\.([a-z]{2,})$/", $_POST['email']))
    {

    }
    else{
      $errors['email2'] = "Please enter a valid email id (Ex:abc@xyz.com) ";
    }
  }
  //Checking if email follows the regular expression
  if(empty($_POST['phone']))
  {
    $errors['phone1'] = "Phone number can not be empty";
  }
  else
  {
    if(preg_match("/^(\(?\s*\d{3}\s*[\)–\.]?\s*)?[2-9]\d{2}\s*[–\.]\s*\d{4}$/",$_POST['phone']))
    {

    }
    else
    {
      $errors['phone2'] = "phone should be in format nnn.nnn.nnnn";
    }
  }

  if(empty($_POST['username']))
  {
    $errors['username1'] = "Enter username";
  }
  else
  {
    if(preg_match("/^([A-Za-z ]+)$/",$_POST['username']))
    {

    }
    else
    {
      $errors['username2'] = "user name should all be characters";
    }
  }
  if(empty($_POST['password']))
  {
    $errors['password1'] = "Enter password";
  }
  else
  {
   if(preg_match("/^[a-zA-Z]\w{8,16}$/",$_POST['password']))
   {}
     else
     {
      $errors['password2'] = "password must be at least 8 characters but no more than 16 characters long";
     }
  }
}

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
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
      var password = document.getElementById('password').value;
      var username = document.getElementById('username').value;
      var phone = document.getElementById('phone').value;
      // document.write(email);
      var errorFlag = false;
      //check email
      var emailReg = /^(.+)@([^\.].*)\.([a-z]{2,})$/;
      var nameReg = /^([A-Za-z ]+)$/;
      var passwordReg = /^[a-zA-Z]\w{8,16}$/;
      var ZipReg = /^\d{5}$/;
      var PhoneReg = /^(\(?\s*\d{3}\s*[\)–\.]?\s*)?[2-9]\d{2}\s*[–\.]\s*\d{4}$/;


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
          var errorFlag = true;
         }

         else
         {
           ltext = "last name is good";

         }

         if (username == "") {
         // alert("Email must be filled out");
         utext = "user name must be filled out";
         errorFlag = true;
         }

         else if(!nameReg.test(username))
         {
           // alert("Please enter a valid email id (Ex:abc@xyz.com)");
           utext =  "user name can only contain letters";
           errorFlag = true;
          }

          else
          {
            utext = "user name is good";
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

          if (phone == "") {
          // alert("Email must be filled out");
          phonetext = "phone must be filled out";
          errorFlag = true;
          }

          else if(!PhoneReg.test(phone))
          {
            // alert("Please enter a valid email id (Ex:abc@xyz.com)");
            phonetext =  "phone should be in format nnn.nnn.nnnn";
            errorFlag = true;
           }

           else
           {
             phonetext = "phone format is good";
           }

       document.getElementById("emailmsg").innerHTML = etext;
       document.getElementById("fnamemsg").innerHTML = ftext;
       document.getElementById("lnamemsg").innerHTML = ltext;
       document.getElementById("passwordmsg").innerHTML = ptext;
       document.getElementById("phonemsg").innerHTML = phonetext;
       document.getElementById("usernamemsg").innerHTML = utext;
       //if any error occurs cancel submit;due to browser
       //irregularities this has to be done in a variety of ways

       if(errorFlag == false){
         // window.alert(errorFlag);
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
            <!-- <nav style="margin-left: 55%; width:14%; "> -->
          <nav style=" margin-left: 40%; margin-top: 2%; width: 35%;">
              <ul style=" font-size: 10px;">
                <li><a 	href="HomeIndividual.php?email=<?php echo $_GET['email'];?>">Inicio</a></li>
                <li><a	href="BuyFromUs1.php?email=<?php echo $_GET['email'];?>">Comprar Boletos</a></li>
                <li><a	href="ProfileIndividual.php?email=<?php echo $_GET['email'];?>">Individual</a></li>
              </ul>
            </nav>
          </div>
        </header>
    <main>
      <div class="imagediv">
      <img class="bannercontacto"src="imagenes/bannercontacto.jpg" alt="bannercontacto">
      <div style="margin-left: 35%; margin-top:4%;" class="textdiv">
        <p style="font-size: 22px; margin:0 0 2px 10px;"><strong>PERFIL</strong></p>
        <div style="margin-left: 5px; margin-top: 5px;  "class="">
        <nav style="margin: 0; font-size: 12px; width:100%; overflow:hidden;">
          <ul style="margin: 0; padding: 0 ">
            <li><a 	href="HomeIndividual.php?email=<?php echo $_GET['email'];?>">INICIO</a></li>
            <li><a	href="ProfileIndividual.php?email=<?php echo $_GET['email'];?>">PERFIL</a></li>
          </ul>

        </nav>
        </div>
        </div>
        </div>
        <?php
        while($row = mysqli_fetch_assoc($results))
        {
          echo "<div class='profilediv'>
            <p style='margin-bottom: 0; font-size: 18px; '> <strong>Tu Informacion del Perfil</strong> </p>
            <div style='font-size: 11px;'class='innerprofilediv'>
              <div class='leftprofilediv'>
                <p style='color: black;'><i class='fa fa-book'></i> &nbsp;".$row['U_First_Name']."</p>
                <p style='color: black;'><i class='fa fa-book'></i> &nbsp;".$row['U_Last_Name']."</p>
                <p style='color: black;'><i class='fa fa-user'></i> &nbsp;".$row['U_Username']."</p>

              </div>
              <div class='middleprofilediv'>
                <p style='color: black; '><i class='fa fa-map-marker'></i> &nbsp;".$row['U_address']."</p>
                <p style='color: black;'><i class='fa fa-phone'></i> &nbsp;".$row['U_Phone']."</p>
                <p style='color: black;'><i class='fa fa-paper-plane-o'></i> &nbsp;".$row['U_Email']."</p>

              </div>
              <div class='rightprofilediv'>
                <img style=' width: 60%; height: 100px; ' src='imagenes/nologo.png' alt='nologo'>
              </div>
            </div>
          </div>";
        }

         ?>
      <form class="" action="ProfileIndividual.php?email=<?php echo $_GET['email'];?>"  onsubmit="return validateform()" method="post">
      <div class="contactdiv">
        <div class="innercontactdiv">
          <p style="font-size: 20px;"><br><strong>Estar en contacto</strong></p>
          <hr>
          <div class="innercontactdivform">
            <div class="innercontactdivform1">
              <label for="">Nombres</label>
              <input type="text" name="fname" id="fname" value="<?php if(isset($_POST['fname'])) echo $_POST['fname'];  ?>" placeholder="Tu Nombre" required>
              <p id="fnamemsg"> </p>
              <label for="">Apedillos</label>
              <input type="text" name="lname" id="lname" value="<?php if(isset($_POST['lname'])) echo $_POST['lname'];  ?>" placeholder="Tu Apedillos" required>
              <p id="lnamemsg"> </p>
            </div>
            <div class="innercontactdivform2">
              <img src="imagenes/user.png" alt="user">
              <button type="button" name="button">
              Seleccionar Foto</button>

            </div>
          </div>
          <label style=" " for="">Correo</label><br>
          <input class="innercontactdivinput"style=" " type="email" name="email" id="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];  ?>" placeholder="Tu correo electronico" required>
          <p id="emailmsg"> </p>
          <div class="innermostcontactdivinline">
            <div class="icdiv1">
              <label for=""></label>Telefono <br>
              <input type="text" name="phone" id="phone" value="<?php if(isset($_POST['phone'])) echo $_POST['phone'];  ?>" placeholder="Telefono" required>
              <p id="phonemsg"> </p>
            </div>
            <div class="icdiv1">
              <label for=""></label>Usuario <br>
              <input type="text" name="username" id="username" value="<?php if(isset($_POST['username'])) echo $_POST['username'];  ?>" placeholder="Nombre de Usuario" required>
              <p id="usernamemsg"> </p>
            </div>
            <div class="icdiv1">
              <label for=""></label>Contrasena <br>
              <input type="password" name="password" id="password" value="<?php if(isset($_POST['password'])) echo $_POST['password'];  ?>" placeholder="Contrasena" required>
              <p id="passwordmsg"> </p>
            </div>


          </div>
          <button class="proindismallbutton" type="button" name="button">Nota:</button>
          <p style="margin: 0; font-weight:lighter; font-size: 11px; ">Solo puede cambiar los datos(Telefono,Contrasena y Foto)</p>
          <?php
                echo "<button style='margin-left: 40%; margin-top: 10px; height: 35px; width: 150px;  margin-bottom: 40px;' class='button1'type='submit' value = '".$_GET['email']."' name='proindi'><small>Guardar Cambios</small></button>";
            ?>
        </div>
      </div>
      </form>
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
    if(isset($errors['phone1']))
      {
    echo $errors['phone1'];
      }
  else if(isset($errors['phone2']))
    {
      echo $errors['phone2'];
    }
?>
<?php
    if(isset($errors['username1']))
      {
    echo $errors['username1'];
      }
  else if(isset($errors['username2']))
    {
      echo $errors['username2'];
    }
?>
<?php
    if(isset($errors['password1']))
      {
    echo $errors['password1'];
      }
  else if(isset($errors['password2']))
    {
      echo $errors['password2'];
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
  if(isset($_POST['proindi']))
  {
    // echo "HEllo";
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];


    if(count($errors) == 0)
    {
      // echo "Hello again";
      // echo $_POST['prolean'];
      $sql = "UPDATE users SET U_Email = '$email', U_Password = '$password', U_First_Name = '$fname', U_Username = '$username', U_Phone = '$phone', U_Last_Name = '$lname' WHERE U_Email = '$_POST[proindi]'";
      // echo $sql;
      $result = mysqli_query($db, $sql);
      echo "updated";

      exit();
    }
  }
?>
