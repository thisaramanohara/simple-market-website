<?php

echo "<head>";
  echo '<link rel="stylesheet" href="myCSS.css">';
  echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">';
  echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>';
  echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>';
  
  echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo "</head>";

session_start();
include 'details.php';


//to refresh the page in 1 sec
//echo '<meta http-equiv="refresh" content="1" > ';

$userName = $_SESSION['userName'];
$password = $_SESSION['password'];
//$userName = $_POST['userName'];
//$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE firstName='$userName' AND password='$password'";
$result = $conn->query($sql);

if($result->num_rows > 0){
  $row = $result->fetch_assoc();


  //-------------- variables that shold be exoported to an another php file
  // $_SESSION[' '] kiyanne hama php ekatama yawanna puluwan variable ekak
  $_SESSION['fN'] = $row['firstName'];
  $_SESSION['lN'] = $row['lastName'];
  $_SESSION['mob'] = $row['mobNum'];
  $_SESSION['e'] = $row['email'];



  //--------------

  /*$fName = $row['firstName'];
  $lName = $row['lastName'];
  $mobNum = $row['mobNum'];
  $email = $row['email'];*/


echo "<h4>".$row['firstName']." ".$row['lastName']." , you have logged in</h4>";

include('formTemplateForLogged.html');

include 'viewAds.php';

}else{
  echo '<script type="text/javascript">';
  echo 'alert("Incorrect input");';
  echo 'window.location.href = "baseLogin.html";';
  echo '</script>';
}





 ?>
