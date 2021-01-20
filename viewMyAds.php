<?php

echo "<head>";
  echo '<link rel="stylesheet" href="myCSS.css">';
  echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">';
  echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>';
  echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>';
  echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo "</head>";

session_start();

$em = $_SESSION['e'];

include 'details.php';


echo "<script type='text/javascript'>";

// Creating a cookie after the document is ready
echo "function myFunction(clicked) {";

      echo 'createCookie("gfg", clicked , "10");';
      echo 'window.location.href = "oneAd.php";';
  //echo "alert(clicked);";
echo "}";



// Function to create the cookie
echo "function createCookie(name, value, days) { ";
    echo "var expires;";

    echo "if (days) {";
        echo "var date = new Date();";
        echo "date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));";
        echo 'expires = "; expires=" + date.toGMTString();';
    echo "}";
    echo "else {";
        echo 'expires = "";';
    echo "}";

    echo 'document.cookie = escape(name) + "=" +';
        echo 'escape(value) + expires + "; path=/";';
echo "}";





echo "</script>";


echo "<h1>Your Ads</h1>";
//echo '<button onclick="window.location.href='viewAds.php';">View ads</button>';







$sql = "SELECT * FROM ads WHERE email='$em' ORDER BY id DESC";

$result = $conn->query($sql);

while ($row = mysqli_fetch_array($result)){
  $formId = $row["adUnique"];


  echo '<div class="container">';
    echo '<div class="row">';
      echo '<div class="col-md-2 col-lg-2 col-sm-2">';
      echo '</div>';
      echo '<div class="col-md-8 col-lg-8 col-sm-8">';

      echo '<div>';
      //echo "<form action='oneAd.php' method='post'>";
  
      //echo '<input type="text" id="cat" value='.$formId.'>';
  //----
  
        //echo "<label id='tit'>".$row['title']."</label>";
        echo "<h2>".$row['title']."</h2>";
        echo "<br>";
          echo "<table>";
            echo "<tr>";
  
            echo "<td>";
              
              //echo "<button id=".$formId." onclick='myFunction(this.id)'>";
  
                echo "<div id='viewAds'>";
                  echo '<img id='.$formId.' src=images/'.$row["image1"].' alt="Submit" width="200" height="200" onclick="myFunction(this.id)">'; 
                echo "</div>";
  
              //echo "</button>";
  
  
            echo "</td>";
  
            echo "<td>";
  
  
  
              echo "&nbsp &nbsp &nbsp<label>".$row['price']." /-</label>";
              echo "<br>";
              echo "&nbsp &nbsp &nbsp<label>".$row['location']."</label>";
              //echo $row['firstName']." ". $row['lastName'];
              echo "<br>";
              echo "&nbsp &nbsp &nbsp<label>".$row['date']."</label>";
              echo "<br>";
              echo "&nbsp &nbsp &nbsp<label>".$row['adUnique']."</label>";
            echo "</td>";
  
            echo "</tr>";
  
  
          echo "</table>";

          
          include 'update_delete.html';

          echo '<hr>';
  
  
  
  echo "</div>";
  
  echo "<br><br>";

      echo '</div>';
    
      echo '<div class="col-md-2 col-lg-2 col-sm-2">';
      echo '</div>';
      
      echo '</div>';
    
      echo '</div>';

     }





 ?>
