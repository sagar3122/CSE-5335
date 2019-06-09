<?php
    $email_pass = $_GET['email'];
    // echo $email_pass;
  $db = mysqli_connect('localhost','sagarsha_wp1','steve@3122HOLMES','sagarsha_leanevento');
  // session_start();

  // $results = array();
  // $id = 1;
  // while($id < 4)
  // {
    $sql = "SELECT * FROM events";
    $results = mysqli_query($db, $sql);
  //   $results[$id] = $result;
  //   $id = $id + 1;
  // }



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
        <nav style=" margin-left: 18%; margin-top: 2%; width: 55%;">
          <ul style=" font-size: 8px;">
            <li><a 	href="HomeAgentLean.php?email=<?php echo $email_pass; ?>">Inicio</a></li>
            <li><a	href="ListIndividual.php?email=<?php echo $email_pass; ?>">Lista de Voluntarios</a></li>
            <li><a	href="ListBusiness.php?email=<?php echo $email_pass; ?>">Lista de Fundacion</a></li>
            <li><a	href="ListEvents.php?email=<?php echo $email_pass; ?>">Eventos</a></li>
              <li><a	href="BuyFromUs1.php?email=<?php echo $email_pass; ?>">Comprar Boletos</a></li>
            <li><a href="ProfileAgentSubMenu.php?email=<?php echo $email_pass; ?>"> Agente</a></li>

          </ul>
        </nav>
      </div>
    </header>
  <main>
    <form id='deleteform' action='ListEvents.php?email=<?php echo $email_pass; ?>' method='post'></form>
    <div class="outermostdiv">
    <h1 style="">Lista de Eventos</h1>
    </div>
    <div class="buttondiv">
      <button class="button4" onclick="window.location.href = 'AddEvent.php?email=<?php echo $email_pass; ?>';" type="submit" name="button">
        Agregar
      </button>
    </div>
<form  action = "EditEvent.php?email=<?php echo $email_pass; ?>" method="post">
    <table style="margin-bottom: 20px;">


      <thead>
        <tr>
          <th style="text-align: center;" colspan="10">Detalles Del Eventos</th>
          <th style="text-indent: 15px;">Lugar</th>
          <th style="text-indent: 5px;">Fecha</th>
          <th style="text-align:left;">Modificar</th>
          <th style="text-indent: 5px;">Eliminar</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while($row = mysqli_fetch_assoc($results))
        {
        echo "<tr>";
          echo "<td> <img src='imagenes/minibaner1.jpg' alt='minibaner1'> </td>";

            echo "<td>".$row["E_Name"]."</td>";
            echo "<td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>";

            echo "<td>".$row["E_place"]."</td>";
            echo "<td>".$row["E_date"]."</td>";



          // <!-- <td>Nombre del Evento y sus details</td>
          // <td>&nbsp;</td>
          // <td>&nbsp;</td>
          // <td>&nbsp;</td>
          // <td>&nbsp;</td>
          // <td>&nbsp;</td>
          // <td>&nbsp;</td>
          // <td>&nbsp;</td>
          // <td>&nbsp;</td>
          // <td>Direccion del lugar</td>
          // <td>14/01/2019
          // </td> -->
          // echo "<td><a href='AddEvent.php'' onclick=\"AddEvent(".$row['E_ID'].");\" class='btn btn-warning btn-sm'>View</a></td>";
          // <!-- onclick="window.location.href = 'AddEvent.php';" -->
          // echo "<td><button class='button3'<a href='AddEvent.php?id=".$row['E_ID']."' target=\"_blank\"  class='btn btn-warning btn-sm'> <i class='fa fa-edit'></i> </a> type= 'submit' name='edit'>
          // </button></td>";
          // echo $_POST['edit'];
          // print_r($_POST);
          // echo empty($_POST['edit1']);
          // echo isset($_POST['edit1']);
          // if(isset($_POST['edit1']))
          // {
          // echo "its true";
          // $_SESSION['id'] = $row["E_ID"];
          // }
          // $id1 = $row['E_ID'];


          // echo "<td><a href='AddEvent.php?id=".$row["E_ID"]."' target=\"_blank\">View</a></td>";

          // echo "<form method="get" action="AddEvent.php">
          //       <input type="text" name="id" value="">
          //       <td><button class='button3'  type= 'submit'>
          //       <i class='fa fa-edit'></i>
          //       </button> </td>
          //       </form>"

          // <!-- <form class="" action="AddEvent.php" method="post">
          //   <td><button class='button3' type= 'submit' name='edit'>
          //     <i class='fa fa-edit'></i>
          //   </button></button> </td>
          // </form> -->
          // try{
          //   if(!is_numeric($row['E_ID'])){
          //     echo "Yes";
          //     throw new Exception();
          //   }
          //   else
          //   {
              echo "<td><button class='button3' type= 'submit' name='edit' value= '".$row['E_ID']."'>
                <i class='fa fa-edit'></i>
              </button></button> </td>";

              echo  "<td> <button style='background-color: red; 'class='button3' type='submit' name='delete' value= '".$row['E_ID']."'  form='deleteform'>
                  <strong><i class='fa fa-trash'></i></strong>
                </button> </td>
            </tr>";
            if(isset($_POST['delete']))
            {
              $sql = "DELETE FROM events WHERE E_ID = '$_POST[delete]'";
              mysqli_query($db, $sql);
            }
            // }

          // }
          // catch(Exception $e){
          //   echo 'row is deleted' .$e->getMessage();
          //
          // }
          }

        ?>

        <!-- <tr>
          <td> <img src="imagenes/minibaner2.jpg" alt="minibaner2"> </td> -->
          <?php
          // while($row = mysqli_fetch_assoc($results[2]))
          // {
            // echo "<td>".$row["E_Name"]."</td>";
            // echo "<td>&nbsp;</td>
            // <td>&nbsp;</td>
            // <td>&nbsp;</td>
            // <td>&nbsp;</td>
            // <td>&nbsp;</td>
            // <td>&nbsp;</td>
            // <td>&nbsp;</td>
            // <td>&nbsp;</td>";
          //
          //   echo "<td>".$row["E_place"]."</td>";
          //   echo "<td>".$row["E_date"]."</td>";
          //
          //
          //   // print_r($_POST);
          //   // // echo empty($_POST['edit1']);
          //   // echo isset($_POST['edit2']);
          //   // if(isset($_POST['edit2']))
          //   // {
          //   // $_SESSION['id'] = $row["E_ID"];
          //   //
          //   // }
          //
          //   $id2 = $row['E_ID'];
          // }
          //
          //
          // // <!-- <td>Nombre del Evento y sus details</td>
          // // <td>&nbsp;</td>
          // // <td>&nbsp;</td>
          // // <td>&nbsp;</td>
          // // <td>&nbsp;</td>
          // // <td>&nbsp;</td>
          // // <td>&nbsp;</td>
          // // <td>&nbsp;</td>
          // // <td>&nbsp;</td>
          // // <td>Direccion del lugar</td>
          // // <td>14/01/2019
          // // </td> -->
          // try{
          //   if(!is_numeric($row['E_ID'])){
          //     // echo "Yes";
          //     throw new Exception();
          //   }
          //   else
          //   {
          //     echo "<td><button class='button3' type= 'submit' name='edit1' value= '".$row['E_ID']."'>
          //       <i class='fa fa-edit'></i>
          //     </button></button> </td>";
          //
          //     echo  "<td> <button style='background-color: red; 'class='button3' type='submit' name='delete2' form='deleteform'>
          //         <strong><i class='fa fa-trash'></i></strong>
          //       </button> </td>
          //   </tr>";
          //   if(isset($_POST['delete2']))
          //   {
          //     $sql = "DELETE FROM events WHERE E_ID = '$id2'";
          //     mysqli_query($db, $sql);
          //   }
          //   }
          //
          // }
          // catch(Exception $e){
          //   echo 'row is deleted' .$e->getMessage();
          //
          // }
          ?>

        <!-- <tr>
          <td> <img src="imagenes/minibaner3.jpg" alt="minibaner3"> </td> -->
          <?php
          // while($row = mysqli_fetch_assoc($results[3]))
          // {
          //   echo "<td>".$row["E_Name"]."</td>";
          //   echo "<td>&nbsp;</td>
          //   <td>&nbsp;</td>
          //   <td>&nbsp;</td>
          //   <td>&nbsp;</td>
          //   <td>&nbsp;</td>
          //   <td>&nbsp;</td>
          //   <td>&nbsp;</td>
          //   <td>&nbsp;</td>";
          //
          //   echo "<td>".$row["E_place"]."</td>";
          //   echo "<td>".$row["E_date"]."</td>";
          //
          //
          //   // print_r($_POST);
          //   // echo empty($_POST['edit1']);
          //   // echo isset($_POST['edit3']);
          //   // if(isset($_POST['edit3']))
          //   // {
          //   // $_SESSION['id'] = $row["E_ID"];
          //   // }
          //   // $id3 = $row['E_ID'];
          //
          //
          // }
          //
          //
          // // <!-- <td>Nombre del Evento y sus details</td>
          // // <td>&nbsp;</td>
          // // <td>&nbsp;</td>
          // // <td>&nbsp;</td>
          // // <td>&nbsp;</td>
          // // <td>&nbsp;</td>
          // // <td>&nbsp;</td>
          // // <td>&nbsp;</td>
          // // <td>&nbsp;</td>
          // // <td>Direccion del lugar</td>
          // // <td>14/01/2019
          // // </td> -->
          // try{
          //   if(!is_numeric($row['E_ID'])){
          //     // echo "Yes";
          //     throw new Exception();
          //   }
          //   else
          //   {
          //     echo "<td><button class='button3' type= 'submit' name='edit1' value= '".$row['E_ID']."'>
          //       <i class='fa fa-edit'></i>
          //     </button></button> </td>";
          //
          //     echo  "<td> <button style='background-color: red; 'class='button3' type='submit' name='delete3' form='deleteform'>
          //         <strong><i class='fa fa-trash'></i></strong>
          //       </button> </td>
          //   </tr>";
          //   if(isset($_POST['delete3']))
          //   {
          //     $sql = "DELETE FROM events WHERE E_ID = '$id3'";
          //     mysqli_query($db, $sql);
          //   }
          //   }
          //
          // }
          // catch(Exception $e){
          //   echo 'row is deleted' .$e->getMessage();
          //
          // }
          ?>
      </tbody>
    </table>
  </form>
    <!-- <div style= "margin-left: 30%;  " class="aftertable">
      <div class="insidediv"> -->

        <!-- <button class="pinsidediv"type="button" name="button"><<</button>
      </div>
      <div class="insidediv"> -->
        <!-- <p class="pinsidediv" style="">1</p> -->
        <!-- <button class="pinsidediv" type="button" name="button">1</button>
      </div>
      <div class="insidediv"> -->
        <!-- <p class="pinsidediv">2</p> -->
        <!-- <button class="pinsidediv"type="button" name="button">2</button>
      </div>
      <div class="insidediv"> -->
        <!-- <p class="pinsidediv">3</p> -->
        <!-- <button class="pinsidediv" type="button" name="button">3</button>
      </div>
      <div class="insidediv"> -->
        <!-- <p class="pinsidediv">4</p> -->
        <!-- <button class="pinsidediv"type="button" name="button">4</button>
      </div>
      <div class="insidediv"> -->
        <!-- <p class="pinsidediv">>></p> -->
        <!-- <button class="pinsidediv"type="button" name="button">>></button>
      </div>


    </div> -->
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
  // print_r($_POST);
  // if(isset($_POST['edit1']))
  // {
  // $_SESSION['id'] = $id1;
  // }
  // else if(isset($_POST['edit2']))
  // {
  // $_SESSION['id'] = $id2;
  // }
  // else if(isset($_POST['edit3']))
  // {
  // $_SESSION['id'] = $id3;
  // }
  // echo $_SESSION['id'];

   ?>
