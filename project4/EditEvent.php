<?php
$email_pass = $_GET['email'];
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['editevents']))
{
  $errors = array();
  if(empty($_POST['name']))
  {
    $errors['name1'] = "Event name can not be empty";
  }
  else
  {
    if(preg_match("/^([A-Za-z\s]+)$/",$_POST['name']))
    {

    }
    else
    {
      $errors['name2'] = "Event name should all be characters";
    }
  }


  if(empty($_POST['responsible']))
  {
    $errors['responsible1'] = "responsible name can not be empty";
  }
  else
  {
    if(preg_match("/^([A-Za-z\s]+)$/",$_POST['responsible']))
    {

    }
    else
    {
      $errors['responsible2'] = "responsible name should all be characters";
    }
  }


  if(empty($_POST['place']))
  {
    $errors['place1'] = "Place name can not be empty";
  }
  else
  {
    if(preg_match("/^([A-Za-z\s]+)$/",$_POST['place']))
    {

    }
    else
    {
      $errors['place2'] = "place name should all be characters";
    }
  }


  if(empty($_POST['date']))
  {
    $errors['date1'] = "Enter date";
  }
  else
  {
    if(preg_match("/^(\d{4})\-((0[1-9])|(1[0-2]))\-((0[1-9])|(1[0-9])|(2[0-9])|(3[0-1]))$/",$_POST['date']))
    {

    }
    else
    {
      $errors['date2'] = "date should be in the format yyyy/mm/dd";
    }
  }
  if(empty($_POST['hour']))
  {
    $errors['hour1'] = "Enter time";
  }
  if(empty($_POST['price']))
  {
    $errors['price1'] = "Enter ticket value";
  }
  else
  {
    if(preg_match("/^(([1-9])|([1-9]\d+))$/",$_POST['price']))
    {

    }
    else
    {
      $errors['price2'] = "ticket price cannot start from 0 and can only be numbers";
    }
  }
}
 ?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="CSS/leanevent.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <script type="text/javascript">
  //refreence these repeatedly
  function validateform()
  {
    var name = document.getElementById('name').value;
    var responsible = document.getElementById('responsible').value;
    var place = document.getElementById('place').value;
    var date = document.getElementById('date').value;
    var hour = document.getElementById('hour').value;
    var price = document.getElementById('price').value;
    // window.alert(hour);
    // document.write(email);
    var errorFlag = false;
    //check email
    var emailReg = /^(.+)@([^\.].*)\.([a-z]{2,})$/;
    var nameReg = /^([A-Za-z\s]+)$/;
    var passwordReg = /^[a-zA-Z]\w{8,16}$/;
    var ZipReg = /^\d{5}$/;
    var PhoneReg = /^(\(?\s*\d{3}\s*[\)–\.]?\s*)?[2-9]\d{2}\s*[–\.]\s*\d{4}$/;
    var dateReg = /^(\d{4})\-((0[1-9])|(1[0-2]))\-((0[1-9])|(1[0-9])|(2[0-9])|(3[0-1]))$/;
    var priceReg = /^(([1-9])|([1-9]\d+))$/;




     if (name == "") {
     // alert("Email must be filled out");
     ntext = "event name must be filled out";
     // window.alert(ntext);
     var errorFlag = true;
     }

     else if(!nameReg.test(name))
     {
       // alert("Please enter a valid email id (Ex:abc@xyz.com)");
       ntext =  "event name can only contain letters";
       // window.alert(ntext);
       var errorFlag = true;
      }

      else
      {
        ntext = "event name is good";
        // window.alert(ntext);
      }

       if (responsible == "") {
       // alert("Email must be filled out");
       restext = "responsible name must be filled out";
       // window.alert(restext);
       var errorFlag = true;
       }

       else if(!nameReg.test(responsible))
       {
         // alert("Please enter a valid email id (Ex:abc@xyz.com)");
         restext =  "responsible name can only contain letters";
         // window.alert(restext);
         var errorFlag = true;
        }

        else
        {
          restext = "responsible name is good";
          // window.alert(restext);
        }


       if (place == "") {
       // alert("Email must be filled out");
       placetext = "place must be filled out";
       // window.alert(placetext);
       var errorFlag = true;
       }

       else if(!nameReg.test(place))
       {
         // alert("Please enter a valid email id (Ex:abc@xyz.com)");
         placetext =  "place name can only contain letters";
         // window.alert(placetext);
         var errorFlag = true;
        }

        else
        {
          placetext = "place is good";
          // window.alert(placetext);
        }

        if (date == "") {
        // alert("Email must be filled out");
        datetext = "date must be filled out";
        // window.alert(datetext);
        var errorFlag = true;
        }

        else if(!dateReg.test(date))
        {
          // alert("Please enter a valid email id (Ex:abc@xyz.com)");
          datetext =  "date should be in the format yyyy/mm/dd";
          // window.alert(datetext);
          var errorFlag = true;
         }

         else
         {
           datetext = "date format is good";
           // window.alert(datetext);
         }
         if (hour == 0) {
         // alert("Email must be filled out");
         hourtext = "time must be filled out";
         // window.alert(hourtext);
         var errorFlag = true;
         }
         else
         {
           hourtext = "time is good";
           // window.alert(hourtext);
         }

         if (price == "") {
         // alert("Email must be filled out");
         pricetext = "price must be filled out";
         // window.alert(pricetext);
         var errorFlag = true;
         }

         else if(!priceReg.test(price))
         {
           // alert("Please enter a valid email id (Ex:abc@xyz.com)");
           pricetext =  "price should not start with 0 and can only be numbers";
           // window.alert(pricetext);
           var errorFlag = true;
          }

          else
          {
            pricetext = "price is good";
            // window.alert(pricetext);

          }
          // window.alert(errorFlag);
     document.getElementById("namemsg").innerHTML = ntext;

     document.getElementById("responsiblemsg").innerHTML = restext;

     document.getElementById("placemsg").innerHTML = placetext;

     document.getElementById("datemsg").innerHTML = datetext;

     document.getElementById("hourmsg").innerHTML = hourtext;
     // window.alert(errorFlag);
     document.getElementById("pricemsg").innerHTML = pricetext;

     //if any error occurs cancel submit;due to browser
     //irregularities this has to be done in a variety of ways
    // window.alert(errorFlag);
     if(errorFlag == false){
       // window.alert("inside true");
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
      // window.alert("false");
      return false;
      }

     }
  </script>
</head>
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
        <div class="imagediv">
        <img class="bannercontacto"src="imagenes/bannerregistro.jpg" alt="bannerregistro">
        <div style="margin-left: 32%; margin-top: 5%; " class="textdiv">
          <p style="font-size: 20px; margin:0 0 2px 20px;"><strong>REGISTRO DE EVENTO</strong></p>
          <div style="display: inline-flex; margin-left: 52px;  "class="">
            <nav style="margin: 0; font-size: 12px; width:100%; overflow:hidden;">
              <ul style="margin: 0; padding: 0 ">
                <li><a 	href="HomeAgentLean.php?email=<?php echo $email_pass; ?>">INICIO</a></li>
                <li><a	href="EditEvent.php?email=<?php echo $email_pass; ?>">REGISTRO</a></li>
              </ul>

            </nav>
          </div>
        </div>
        </div>
        <form class="" action="EditEvent.php?email=<?php echo $email_pass; ?>" onsubmit=" return validateform()" method="post">
      <div style="margin-top: 100px;" class="contactdiv">
        <div class="innercontactdiv">
          <p style="font-size: 20px;"><br><strong>Registro de Evento</strong></p>
          <hr>
          <div class="innercontactdivform">
            <div class="innercontactdivform1">
              <label for="">Nombres</label>
              <input type="text" name="name" id="name" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>" placeholder="Nombre del Evento" required>
                <p id="namemsg"> </p>
              <label for="">Responsable</label>
              <input type="text" name="responsible" id="responsible" value="<?php if(isset($_POST['responsible'])) echo $_POST['responsible']; ?>" placeholder="Nombre des Responsable" required>
                <p id="responsiblemsg"> </p>
            </div>
            <div class="innercontactdivform2">
              <img src="imagenes/imagensubir.png" alt="imagensubir">
              <button style="margin-top:0; " type="button" name="button">
              Seleccionar Imagen</button>

            </div>
          </div>
          <label style=" " for="">Lugar</label><br>
          <input class="innercontactdivinput"style=" " type="text" name="place" id="place" value="<?php if(isset($_POST['place'])) echo $_POST['place']; ?>" placeholder="Direccion del Lugar del Eventos" required>
          <p id="placemsg"></p>
          <div class="innermostcontactdivinline">
            <div class="icdiv1">
              <label for=""></label>Fecha <br>
              <input type="text" name="date" id="date" value="<?php if(isset($_POST['date'])) echo $_POST['date']; ?>" placeholder="mm/dd/yyyy" required>
                <p id="datemsg"> </p>
            </div>
            <div class="icdiv1">
              <label for=""></label>Hora <br>
              <input type="time" name="hour" id="hour" value="<?php if(isset($_POST['hour'])) echo $_POST['hour']; ?>" placeholder="00:00" required>
                  <p id="hourmsg"> </p>
            </div>
            <div class="icdiv1">
              <label for=""></label>Valor de Boleto <br>
              <input type="text" name="price" id="price" value="<?php if(isset($_POST['price'])) echo $_POST['price']; ?>" placeholder="$000.00" required>
              <p id="pricemsg"></p>
            </div>


          </div>

          <button style="margin-left: 40%; margin-top: 10px; height: 35px; width: 100px;  margin-bottom: 40px;" class="button1"type="submit" name="editevents"><small>Guardar</small></button>
        </div>
      </div>
      <?php
      // echo "editid.$_POST[edit]";
      if (isset($_POST['edit']))
      {
        // echo $_POST['edit2'];

        $id = $_POST['edit'];
        echo "<input type='hidden' name='id'id='id' value=".$id.">";
      }
      // if (isset($_POST['edit1']))
      // {
      //   // echo $_POST['edit1'];
      //   $id = $_POST['edit1'];
      //   echo "<input type='hidden' name='id'id='id' value=".$id.">";
      // }
      //
      // if (isset($_POST['edit3']))
      // {
      //   // echo $_POST['edit3'];
      //   $id = $_POST['edit3'];
      //   echo "<input type='hidden' name='id' id='id' value=".$id.">";
      // }
      ?>
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
  // $row['E_ID'] = $_SESSION['id'];
  // echo $row['E_ID'];
  // $row['E_ID'] = $_SESSION['id2'];
  // echo $row['E_ID'];
  // $row['E_ID'] = $_SESSION['id3'];
  // echo $row['E_ID'];
 ?>
<?php
  include("server.php");
 ?>

 <?php
 if(isset($errors["name1"]))
 {
   echo $errors["name1"];
 }
 else if(isset($errors["name2"]))
 {
   echo $errors["name2"];
 }
  ?>

  <?php
  if(isset($errors["responsible1"]))
  {
    echo $errors["responsible1"];
  }
  else if(isset($errors["responsible2"]))
  {
    echo $errors["responsible2"];
  }
   ?>

   <?php
   if(isset($errors["place1"]))
   {
     echo $errors["place1"];
   }
   else if(isset($errors["place2"]))
   {
     echo $errors["place2"];
   }
    ?>

    <?php
    if(isset($errors["hour1"]))
    {
      echo $errors["hour1"];
    }
     ?>

     <?php
     if(isset($errors["date1"]))
     {
       echo $errors["date1"];
     }
     else if(isset($errors["date2"]))
     {
       echo $errors["date2"];
     }
      ?>

      <?php
      if(isset($errors["price1"]))
      {
        echo $errors["price1"];
      }
      else if(isset($errors["price2"]))
      {
        echo $errors["price2"];
      }
       ?>
