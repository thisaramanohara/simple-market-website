<?php

  $serverName = "localhost";
  $userName = "root";
  $password = "manohara";
  $db = "sell";

  $conn = new mysqli($serverName, $userName, $password,$db);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $fName = $_POST['fName'];
  $lName = $_POST['lName'];
  $mobNum = $_POST['mobNum'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "INSERT INTO users (firstName, lastName, mobNum, email, password) VALUES ('$fName', '$lName', '$mobNum', '$email', '$password')";

  if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">';
    echo 'alert("account created");';
    echo 'window.location.href = "LoginSignUp.html";';
    echo '</script>';

  } else {
    echo '<script type="text/javascript">';
    echo 'alert("May be there is a user having the same email. Contact us");';
    echo 'window.location.href = "LoginSignUp.html";';
    echo '</script>';
    //echo "Error: " . $sql . "<br>" . $conn->error;
  }




 ?>
