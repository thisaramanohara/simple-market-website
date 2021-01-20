<?php

echo "<head>";
echo '<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">';
echo '<link rel="stylesheet" href="myCSS.css">';
echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">';
echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>';
echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>';

echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo "</head>";

include 'details.php';

$name = NULL;

//if(isset($_COOKIE["gfg"])) {  // only if it is set
        //$name = $_COOKIE["gfg"];
        $UUU = $_GET['id'];

//}
        $sql = "SELECT * FROM ads WHERE adUnique='$UUU'";
        $result = $conn->query($sql);
        while ($row = mysqli_fetch_array($result)){
echo '<div class="container">';
  echo '<div class="row">';//----
    echo '<div class="col-md-2 col-lg-2 col-sm-2">';
    echo '</div>';

              echo '<div class="col-md-8 col-lg-8 col-sm-8">';
                //while ($row = mysqli_fetch_array($result)){

                echo '<h2 class="homeBanner">'.$row["title"].'</h2>';
                echo '<br>';

                  //******************
                  //--------------------------------------------------------------
                //echo '<div style="width:80%; height:auto;">';

                echo '<div id="myCarousel" class="carousel slide" data-ride="carousel" style="width:80%; min-height: 30%;">';
                  //<!-- Indicators -->
                  echo '<ol class="carousel-indicators">';
                  echo '<li data-target="#myCarousel" data-slide-to="0" class="active"></li>';
                  echo '<li data-target="#myCarousel" data-slide-to="1"></li>';
                  echo '<li data-target="#myCarousel" data-slide-to="2"></li>';
                  echo '</ol>';


                  //<!-- Wrapper for slides -->
                  echo '<div class="carousel-inner" >';
                    echo '<div class="item active">';
                      echo '<img src=images/'.$row["image1"].' alt="" style="width:100%; height:auto; max-height:30%;"  >';
                    echo '</div>';

                    echo '<div class="item">';
                      echo '<img src=images/'.$row["image2"].' alt="" style="width:100%; max-height:30%;">';
                    echo '</div>';

                    echo '<div class="item">';
                      echo '<img src=images/'.$row["image3"].' alt="" style="width:100%; max-height:30%;" >';
                    echo '</div>';

                    echo '<div class="item">';
                      echo '<img src=images/'.$row["image4"].' alt="" style="width:100%; max-height:30%;" >';
                    echo '</div>';

                    echo '<div class="item">';
                      echo '<img src=images/'.$row["image5"].' alt="" style="width:100%; max-height:30%;" >';
                    echo '</div>';

                  echo '</div>';

                  //<!-- Left and right controls -->
                  echo '<a class="left carousel-control" href="#myCarousel" data-slide="prev">';
                  echo '<span class="glyphicon glyphicon-chevron-left"></span>';
                  echo '<span class="sr-only">Previous</span>';
                  echo '</a>';
                  echo '<a class="right carousel-control" href="#myCarousel" data-slide="next">';
                  echo '<span class="glyphicon glyphicon-chevron-right"></span>';
                  echo '<span class="sr-only">Next</span>';
                  echo '</a>';

                echo '</div>';

                //echo '</div>'; //neewwwwwwwwwwwwwwww


                  echo '<br>';

                    echo "<table>";


                      echo "<tr></tr>";
                      echo "<tr></tr>";

                      echo "<tr>";
                        echo "<td>";
                          echo "<label>Discription</label>";
                        echo "</td>";
                        echo "<td>";
                          echo '<textarea id="dis" name="discription" rows="8" cols="30" placeholder="Discription" readonly>'.$row["discription"].'</textarea>';
                        echo "</td>";
                      echo "</tr>";

                      echo '<tr><td>&nbsp</td><td>&nbsp</td></tr>';

                      echo "<tr>";
                        echo "<td>";
                          echo "<label>Price</label>";
                        echo "</td>";

                        echo "<td>";
                          echo '<label id="price" >'.$row["price"].'</label>';
                        echo "</td>";
                      echo "</tr>";

                      echo "<tr>";
                        echo "<td>";
                          echo "<label>Category</label>";
                        echo "</td>";
                        echo "<td>";
                          echo '<label class="nor" >'.$row["catagory"].'</label>';
                        echo "</td>";
                      echo "</tr>";

                      echo "<tr>";
                        echo "<td>";
                          echo "<label>Location</label>";
                        echo "</td>";
                        echo "<td>";
                          echo '<label class="nor" >'.$row["location"].'</label>';
                        echo "</td>";
                      echo "</tr>";

                    echo "</table>";

                    //echo "<label><b>CONTACT DETAILS</b><label>";


                    echo "<table>";
                      echo "<tr>";
                        echo "<td>";
                          echo "<label>Name</label>";
                        echo "</td>";
                        echo '<td></td>';
                        echo "<td>";
                          echo '<label id="name" >'.$row["firstName"].' '.$row["lastName"].'</label>';
                        echo "</td>";
                      echo "</tr>";

                      echo "<tr>";
                      echo "<td>";
                        echo "<label>Tel</label>";
                      echo "</td>";
                      echo '<td></td>';
                      echo "<td>";
                        echo '<label id="name" >'.$row["mobNumber"].'</label>';
                      echo "</td>";
                      echo "</tr>";

                      echo "<tr>";
                      echo "<td>";
                        echo "<label>email</label>";
                      echo "</td>";
                      echo '<td>&nbsp &nbsp &nbsp</td>';
                      echo "<td>";
                        echo '<label id="name" >'.$row["email"].'</label>';
                      echo "</td>";
                      echo "</tr>";

                    echo "</table>";




              echo '</div>';

      echo '<div class="col-md-2 col-lg-2 col-sm-2">';
      echo '</div>';
  echo '</div>';
  echo '</div>';


      }


















 ?>
