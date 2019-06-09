<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $errors_business = array();
    if(empty($_POST['email']))
    {
      $errors_business['email1'] = "Your email cannot be empty";
    }
    else
    {
      if(preg_match("/^(.+)@([^\.].*)\.([a-z]{2,})$/", $_POST['email']))
      {

      }
      else
      {
        $errors_business['email2'] = "Your email should be in the format (Ex: abc@xyz.com)";
      }
    }

    if(empty($_POST['fname']))
    {
      $errors_business['fname1'] = "Your first name can not be empty";
    }
    else
    {
      if(preg_match("/^([A-Za-z ]+)$/",$_POST['fname']))
      {

      }
      else
      {
        $errors_business['fname2'] = "Your first name should all be characters";
      }
    }

    if(empty($_POST['lname']))
    {
      $errors_business['lname1'] = "Your last name can not be empty";
    }
    else
    {
      if(preg_match("/^([A-Za-z ]+)$/",$_POST['lname']))
      {

      }
      else
      {
        $errors_business['lname2'] = "Your last name should all be characters";
      }
    }

    if(empty($_POST['password']))
    {
      $errors_business['password1'] = "Your password should not be empty";
    }
    else
    {
      if(preg_match("/^[a-zA-Z]\w{8,16}$/",$_POST['password']))
      {

      }
      else
      {
        $errors_business['password2'] = "Your password must be at least 8 characters but no more than 16 characters long.";

      }
    }

    if(empty($_POST['address']))
    {
      $errors_business['address1'] = "Your address can not be empty";
    }
    if(empty($_POST['city']))
    {
      $errors_business['city1'] = "Your city can not be empty";
    }
    if(empty($_POST['state']))
    {
      $errors_business['state1'] = "Your state can not be empty";
    }
    if(empty($_POST['ZipCode']))
    {
      $errors_business['ZipCode1'] = "Your zipcode can not be empty";
    }
    else
    {
      if(preg_match("/^\d{5}$/",$_POST['ZipCode']))
      {

      }
      else
      {
        $errors_business['ZipCode2'] = "Your ZipCode should be 5 digits";
      }
    }

    if(empty($_POST['business']))
    {
      $errors_business['business1'] = "Select a type of Business";
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
      var password = document.getElementById('password').value;
      var state = document.getElementById('state').value;
      var city = document.getElementById('city').value;
      var address = document.getElementById('address').value;
      var ZipCode = document.getElementById('ZipCode').value;
      var business1 = document.getElementById('business1');
      var business2 = document.getElementById('business2');
      var business3= document.getElementById('business3');
      // document.write(business);
      // var business2 = document.getElementById('business2').value;
      // var business3 = document.getElementById('business3').value;
      // document.write(email);
      var errorFlag = false;
      //check email
      var emailReg = /^(.+)@([^\.].*)\.([a-z]{2,})$/;
      var nameReg = /^([A-Za-z ]+)$/;
      var passwordReg = /^[a-zA-Z]\w{8,16}$/;
      var ZipReg = /^\d{5}$/;


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
         if (address == "") {
         // alert("Email must be filled out");
         atext = "address must be filled out";
         errorFlag = true;
         }
         else
         {
           atext = "address is good";
         }
         if (city == "") {
         // alert("Email must be filled out");
         ctext = "city must be filled out";
         errorFlag = true;
         }
         else
         {
           ctext = "city is good";
         }
         if (state == "") {
         // alert("Email must be filled out");
         stext = "state must be filled out";
         errorFlag = true;
         }
         else
         {
           stext = "state is good";
         }


        // for (var i = 0, len = business.length; i < len; i++)
        // {
        //   if (business[i].checked)
        //   {
        //     btext = "business is good";
        //     break;
        //   }
        //   else
        //   {
        //     btext = "business must be filled out";
        //     errorFlag = true;
        //   }
        // }

        if(business1.checked || business2.checked || business3.checked)
        {
          btext = "business is good";

        }
        else
        {

        btext = "business must be filled out";
        errorFlag = true;
        }
         // if (business == "") {
         // // alert("Email must be filled out");
         // btext = "business must be filled out";
         // errorFlag = true;
         // }
         // else
         // {
         //   btext = "business is good";
         // }

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
          if (ZipCode == "") {
          // alert("Email must be filled out");
          ztext = "ZipCode must be filled out";
          errorFlag = true;
          }

          else if(!ZipReg.test(ZipCode))
          {
            // alert("Please enter a valid email id (Ex:abc@xyz.com)");
            ztext =  "ZipCode should be 5 digits";
            errorFlag = true;
           }

           else
           {
             ztext = "ZipCode format is good";
           }
       document.getElementById("emailmsg").innerHTML = etext;
       document.getElementById("fnamemsg").innerHTML = ftext;
       document.getElementById("lnamemsg").innerHTML = ltext;
       document.getElementById("passwordmsg").innerHTML = ptext;
       document.getElementById("addressmsg").innerHTML = atext;
       document.getElementById("citymsg").innerHTML = ctext;
       document.getElementById("statemsg").innerHTML = stext;
       document.getElementById("Zipmsg").innerHTML = ztext;
       document.getElementById("businessmsg").innerHTML = btext;
       //if any error occurs cancel submit;due to browser
       //irregularities this has to be done in a variety of ways
       // window.alert(errorFlag);
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
  <main>
    <div class="registerIndividual">
      <p>Registro Negocio O Foundation</p>
      <hr>
      <form class="" action="Business.php" onsubmit="return validateform()" method="post">
        <div style="width : 50%; float:left; margin-bottom: 20px;"class="">
          <fieldset class="fourinputs">
            <label for="">Correo</label>
            <input class="input1" type="email" name="email" id="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" placeholder="Correo" required>
            <p id="emailmsg"> </p>
            <label for="">Nombre</label>
            <input class="input2" type="text" name="fname" id="fname" value="<?php if(isset($_POST['fname'])) echo $_POST['fname']; ?>" placeholder="Nombre" required>
            <p id="fnamemsg"> </p>
          </fieldset>

        </div>
        <div style="width: 50%; float: right; margin-bottom: 30px;" class="">
          <fieldset class="fourinputs">
            <label for="">Contrasena</label>
            <input class="input1" type="password" name="password" id="password" value="" placeholder="Contrasena" required>
            <p id="passwordmsg"> </p>
            <label for="">Apellido</label>
            <input class="input2" type="text" name="lname" id="lname" value="<?php if(isset($_POST['lname'])) echo $_POST['lname']; ?>" placeholder="Apellido" required>
            <p id="lnamemsg"> </p>
          </fieldset>
        </div>

          <label  for="">Direccion</label>
          <input class="input1" type="text" name="address" id="address" value="<?php if(isset($_POST['address'])) echo $_POST['address']; ?>" placeholder="Direccion" required>
          <p id="addressmsg"> </p>
          <label for="">Ciudad</label>
          <input class="input1" type="text" name="city" id="city" value="<?php if(isset($_POST['city'])) echo $_POST['city']; ?>" placeholder="Ciudad" required>
          <p id="citymsg"> </p>
          <div style="width : 70%; float:left;"class="">
            <fieldset class="fourinputs">
              <label for="">Estado</label>
              <select style="margin-top: 5px; height: 55px; width: 100%;" name="state" id = "state">
                <option>New York</option>
                <option>Mountain View,CA</option>
                <option>LA,CA</option>
                <option>Dallas</option>
              </select>
              <p id="statemsg"> </p>
            </fieldset>

          </div>
          <div style="width: 30%; float: right;" class="">
            <fieldset style="margin-top: 4px;" class="fourinputs">
              <label for="">Codigo Postal</label>
              <input class="input1" type="text" name="ZipCode" id="ZipCode" value="<?php if(isset($_POST['ZipCode'])) echo $_POST['ZipCode']; ?>" placeholder="" required>
              <p id="Zipmsg"> </p>
            </fieldset>
          </div>

            <fieldset style="width:100%; margin-bottom:50px; padding: 0; font-size: 13px; ">
              <input type="radio" name="business" id="business1" value="1">Tipo de negocio 1
              <input style="margin-left: 60px;" type="radio" name="business" id="business2" value="2">Tipo de negocio 2
              <input style="margin-left: 60px;" type="radio" name="business" id="business3" value="3">Tipo de negocio 3
              <p id="businessmsg"> </p>
            </fieldset>

          <button class="button1" type="submit" name="users2">
            Registrarse
          </button>
          <hr>
          <button class="button2" type="button" onclick="window.location.href = 'Signup.php';" name="button">
            Cerrar
          </button>

      </form>

    </div>
  </main>
</div>
</body>
</html>

<?php
  include('server.php');
 ?>

 <?php
 if(isset($errors_business["fname1"]))
 {
   echo $errors_business["fname1"];
 }
 else if(isset($errors_business["fname2"]))
 {
   echo $errors_business["fname2"];
 }
  ?>

  <?php
  if(isset($errors_business["email1"]))
  {
    echo $errors_business["email1"];
  }
  else if(isset($errors_business["email2"]))
  {
    echo $errors_business["email2"];
  }
   ?>

   <?php
   if(isset($errors_business["lname1"]))
   {
     echo $errors_business["lname1"];
   }
   else if(isset($errors_business["lname2"]))
   {
     echo $errors_business["lname2"];
   }
    ?>

    <?php
    if(isset($errors_business["ZipCode1"]))
    {
      echo $errors_business["ZipCode1"];
    }
    else if(isset($errors_business["ZipCode2"]))
    {
      echo $errors_business["ZipCode2"];
    }
     ?>

     <?php
     if(isset($errors_business["password1"]))
     {
       echo $errors_business["password1"];
     }
     else if(isset($errors_business["password2"]))
     {
       echo $errors_business["password2"];
     }
      ?>

      <?php
      if(isset($errors_business["address1"]))
      {
        echo $errors_business["address1"];
      }
       ?>

       <?php
       if(isset($errors_business["city1"]))
       {
         echo $errors_business["city1"];
       }
        ?>

        <?php
        if(isset($errors_business["state1"]))
        {
          echo $errors_business["state1"];
        }
         ?>

         <?php
         if(isset($errors_business["business1"]))
         {
           echo $errors_business["business1"];
         }
          ?>
