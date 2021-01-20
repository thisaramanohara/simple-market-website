<?php

echo "<head>";
  echo '<link rel="stylesheet" href="myCSS.css">';
  echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo "</head>";

session_start();

echo "<h4>Hi ".$_SESSION['fN']." ".$_SESSION['lN']."</h4>";
//echo "<h1 class='homeBanner'>Create your Advertisement</h1>";

include('adFormLogged.html');



 ?>
