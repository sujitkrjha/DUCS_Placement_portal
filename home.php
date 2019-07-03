<?php
 session_start();
if ($_SESSION['user_name']== True) {
//   # code...
    echo "Welcome "." ".$_SESSION['user_name']."how do u do ? ur sucessfully loged in";

   //header('location:register.php');
}

//
 else {
  header('location:login.php');
 }


 ?>
<a href="logout.php">LOG OUT</a>
