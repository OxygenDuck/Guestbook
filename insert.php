<?php
  //Variable
  $firstname = $_POST["firstname"];
  $insertion = $_POST["insertion"];
  $lastname = $_POST["lastname"];
  $email = $_POST["email"];
  $webaddress = $_POST["webaddress"];
  $message = $_POST["message"];
  $date = date("Y-n-d h:i:s");

  //Validation

  session_start();

  $notEnoughData = false;

  if ($firstname == ""){
    $notEnoughData = true;
    $_SESSION['firstname'] = "First Name";
  }

  if ($lastname == ""){
    $notEnoughData = true;
    $_SESSION['lastname'] = "Last Name";
  }

  if ($email == ""){
    $notEnoughData = true;
    $_SESSION['email'] = "E-mail";
  }

  if ($message == ""){
    $notEnoughData = true;
    $_SESSION['message'] = "Message";
  }

  if ($notEnoughData == true){
    header("Location: index.php?insufficient=true");
  }
  else {
    foreach ($_SESSION as $value) {
      $value = "";
    }
  }

  //Captcha Validation
  include_once 'securimage/securimage.php';
  $securimage = new Securimage();

  if ($securimage->check($_POST['captcha_code']) == false) {
  echo "The security code entered was incorrect.<br /><br />";
  echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";
  header('location: index.php?wrongCaptcha=true');
  exit;
}


  //connecting to the database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbName = "guestbook";

  $connect = mysqli_connect($servername,$username,$password,$dbName);

  //see if connection is succesful or not
  if (!$connect) {
    die('error connecting to database');
  }

  $query = "INSERT INTO data(firstname, insertion, lastname, email, webaddress, message, date) VALUES('$firstname', '$insertion', '$lastname', '$email', '$webaddress', '$message', '$date')";
  //get the data from the database
  $result = $connect->query($query);

  echo mysqli_error($connect);

  mysqli_close($connect);

  header("Location: index.php?valid=true");
 ?>
