<?php
  $db = mysqli_connect('localhost','sagarsha_wp1','steve@3122HOLMES','sagarsha_leanevento');
  if(isset($_POST['users1']))
  {
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $password = $_POST['password'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $ZipCode = $_POST['ZipCode'];

    if(count($errors_individual) == 0)
    {
      $sql = "INSERT INTO users(U_Email, U_Password, U_Last_Name, U_First_Name, U_address, U_city, U_state, U_postal_code, U_role_ID)
              VALUES('$email','$password','$lname','$fname','$address','$city','$state','$ZipCode','1')";
      mysqli_query($db, $sql);
      echo "inserted";
      }
    }
    if(isset($_POST['users2']))
    {
      $email = $_POST['email'];
      $fname = $_POST['fname'];
      $password = $_POST['password'];
      $lname = $_POST['lname'];
      $address = $_POST['address'];
      $city = $_POST['city'];
      $state = $_POST['state'];
      $ZipCode = $_POST['ZipCode'];
      $Business = $_POST['business'];

      if(count($errors_business) == 0)
      {
        $sql = "INSERT INTO users(U_Email, U_Password, U_Last_Name, U_First_Name, U_address, U_city, U_state, U_postal_code, U_type_of_business, U_role_ID)
                VALUES('$email','$password','$lname','$fname','$address','$city','$state','$ZipCode','$Business','2')";
        mysqli_query($db, $sql);
        echo "inserted";
      }
    }

    if(isset($_POST['users3']))
    {
      $email = $_POST['email'];
      $fname = $_POST['fname'];
      $password = $_POST['password'];
      $lname = $_POST['lname'];
      $address = $_POST['address'];
      $city = $_POST['city'];
      $state = $_POST['state'];
      $ZipCode = $_POST['ZipCode'];

      if(count($errors_lean) == 0)
      {
        $sql = "INSERT INTO users(U_Email, U_Password, U_Last_Name, U_First_Name, U_address, U_city, U_state, U_postal_code, U_role_ID)
                VALUES('$email','$password','$lname','$fname','$address','$city','$state','$ZipCode','3')";
        mysqli_query($db, $sql);
        echo "inserted";
        }
    }

    if(isset($_POST['login']))
    {
      $email = $_POST['email'];
      $password = $_POST['password'];

      if(count($errors) == 0)
      {
        $sql = "SELECT * FROM users";
        $result = mysqli_query($db, $sql);

        while($row = mysqli_fetch_array($result))
        {
          if($row["U_Email"] == $email && $row["U_Password"] == $password && $row["U_role_ID"] == '1')
          {
              // echo "success 1";
              header("location:HomeIndividual.php?email=".$email);
          }
          elseif($row["U_Email"] == $email && $row["U_Password"] == $password && $row["U_role_ID"] == '2')
          {
              // echo "success 2";
              header("location:HomeBusiness.php?email=".$email);
          }
          elseif($row["U_Email"] == $email && $row["U_Password"] == $password && $row["U_role_ID"] == '3')
          {
              // echo "success 3";
              header("location:ListEvents.php?email=".$email);
          }
          else
          {
            $errors['email3'] = "Email or Password is Incorrect";
          }
        }
      }
    }
    // && isset($row['E_ID'])
    if(isset($_POST['addevents']))
    {
      $name = $_POST['name'];
      $responsible = $_POST['responsible'];
      $place = $_POST['place'];
      $date = $_POST['date'];
      $hour = $_POST['hour'];
      $price = $_POST['price'];

      if(count($errors) == 0)
      {
        echo "it's inserting";
        $sql = "INSERT INTO events(E_Name, E_place, E_date, E_ticket_value, E_hour, E_Responsible)
                VALUES('$name','$place','$date','$price','$hour','$responsible')";
        // echo $sql;
        mysqli_query($db, $sql);
      }
    }


    if(isset($_POST['editevents']))
    {

      $name = $_POST['name'];
      $responsible = $_POST['responsible'];
      $place = $_POST['place'];
      $date = $_POST['date'];
      $hour = $_POST['hour'];
      $price = $_POST['price'];
      $id = $_POST['id'];

      if(!empty($id))
      {

        if(count($errors) == 0)
        {
            // echo "inside";
            $sql = "UPDATE events SET E_Name='$name',E_place='$place',E_date='$date',E_ticket_value=$price,E_hour='$hour',E_Responsible='$responsible'
                    WHERE E_ID = '$id'";
            // echo $sql;
            mysqli_query($db, $sql);
            echo "updated";
            }
            else
            {
              echo "doesnt work";
            }
      }
      else
      {
        "doenst work";
      }

      }

 ?>
