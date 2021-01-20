<?php

$image1=NULL;
$image2=NULL;
$image3=NULL;
$image4=NULL;
$image5=NULL;

$uniqueID = NULL;

$image1_name = NULL;
$image2_name = NULL;
$image3_name = NULL;
$image4_name = NULL;
$image5_name = NULL;

session_start();

include 'details.php';


if(isset($_POST['upload'])){

    

    if(isset($_FILES['image1'])){
      $image1_name = $_FILES['image1']['name'];
      
      $image1_name = preg_replace('/\s+/','',$image1_name);
      
    }

    if(isset($_FILES['image1'])){
      $target1 = "images/".basename($image1_name);
    }
    //------------------

    if(isset($_FILES['image2'])){
      $image2_name = $_FILES['image2']['name'];
      
      $image2_name = preg_replace('/\s+/','',$image2_name);
      
    }

    if(isset($_FILES['image2'])){
      $target2 = "images/".basename($image2_name);
    }
    //---------------------------------
    if(isset($_FILES['image3'])){
      $image3_name = $_FILES['image3']['name'];
      
      $image3_name = preg_replace('/\s+/','',$image3_name);
      
    }

    if(isset($_FILES['image3'])){
      $target3 = "images/".basename($image3_name);
    }
    //------------------------
    if(isset($_FILES['image4'])){
      $image4_name = $_FILES['image4']['name'];
      
      $image4_name = preg_replace('/\s+/','',$image4_name);
      
    }

    if(isset($_FILES['image4'])){
      $target4 = "images/".basename($image4_name);
    }
    //-----------------
    if(isset($_FILES['image5'])){
      $image5_name = $_FILES['image5']['name'];
      
      $image5_name = preg_replace('/\s+/','',$image5_name);
      
    }

    if(isset($_FILES['image5'])){
      $target5 = "images/".basename($image5_name);
    }






    //$_SESSION[' '] kiyana global varibales walin normal varibles walata values ganima
    $fName = $_SESSION['fN'];
    $lName = $_SESSION['lN'];
    $email = $_SESSION['e'];
    $mobNum = $_SESSION['mob'];

    $title = $_POST['adTitle'];
    $catagory = $_POST['catagory'];
    $location = $_POST['location'];
    $price = $_POST['price'];

    if(isset($_POST['nogotiable'])){
      $nogotiable = 'TRUE';
    }else {
      $nogotiable = 'FALSE';
    }

    $discription = $_POST['discription'];

    //creating a uniq id
    $getUniqueSql = 'SELECT * FROM ads ORDER BY id DESC LIMIT 1';
    $result = $conn->query($getUniqueSql);

      while ($row = mysqli_fetch_array($result)){
        $uniqueID = "E".$row['id'];
      }




    //$sql = "INSERT INTO ads (firstName, lastName,mobNumber,email , title, catagory,location,price,negotiable,discription,date) VALUES ('$fName', '$lName', '$mobNum', '$email', '$title','$catagory','$location','$price',$nogotiable,'$discription',CURDATE())";

    $sql = "INSERT INTO ads (firstName, lastName,mobNumber,email , title, catagory,location,price,negotiable,discription,date,image1,image2,image3,image4,image5,adUnique) VALUES ('$fName', '$lName', '$mobNum', '$email', '$title','$catagory','$location','$price',$nogotiable,'$discription',CURDATE(),'$image1_name','$image2_name','$image3_name','$image4_name','$image5_name','$uniqueID')";


    if ($conn->query($sql) === TRUE) {

      if(isset($_FILES['image1'])){
        move_uploaded_file($_FILES['image1']['tmp_name'],$target1);
      }
      if(isset($_FILES['image2'])){
        move_uploaded_file($_FILES['image2']['tmp_name'],$target2);
      }
      if(isset($_FILES['image3'])){
        move_uploaded_file($_FILES['image3']['tmp_name'],$target3);
      }
      if(isset($_FILES['image4'])){
        move_uploaded_file($_FILES['image4']['tmp_name'],$target4);
      }
      if(isset($_FILES['image5'])){
        move_uploaded_file($_FILES['image5']['tmp_name'],$target5);
      }


      echo '<script type="text/javascript">';
      echo 'alert("ad created");';
      echo 'window.location.href = "homeLogged.php";';
      echo '</script>';

    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }



}











 ?>
