<?php

echo "<head>";
  echo '<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">';
  echo '<link rel="stylesheet" href="myCSS.css">';
echo "</head>";


include 'details.php';


echo "<script type='text/javascript'>";

// Creating a cookie after the document is ready
echo "function myFunction(clicked) {";

      //echo 'createCookie("gfg", clicked , "10");';

      //echo 'window.location.href = "oneAd.php";';
      echo 'window.location.href = "oneAd.php?id="+clicked;';

  //echo "alert(clicked);";
echo "}";



// Function to create the cookie
/*echo "function createCookie(name, value, days) { ";
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
echo "}";*/





echo "</script>";










$sql = "SELECT * FROM ads ORDER BY id DESC";

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
