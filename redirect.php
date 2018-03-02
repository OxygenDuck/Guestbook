<?php
  //Variable
  $firstname = $_POST["firstname"];
  $insertion = $_POST["insertion"];
  $lastname = $_POST["lastname"];
  $email = $_POST["email"];
  $webaddress = $_POST["webaddress"];
  $message = $_POST["message"];

  if ($firstname == "" || $lastname == "" || $email == "" || $message == "") {
      header("Location: index.php?no=true");
  }

  include_once 'securimage/securimage.php';
  $securimage = new Securimage();

  if ($securimage->check($_POST['captcha_code']) == false) {
  echo "The security code entered was incorrect.<br /><br />";
  echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";
  header('location: index.php');
  exit;
}
  echo "If everything is filled in, this will be displayed";


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

  $query = "INSERT INTO data(firstname, insertion, lastname, email, webaddress, message) VALUES($firstname, $insertion, $lastname, $email, $webaddress, $message);";
  //get the data from the database
  $result = $connect->query($query);

  echo mysqli_error($connect);

  mysqli_close($connect);

  //header("Location: index.php");
 ?>
