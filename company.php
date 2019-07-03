<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$hostname = "localhost";
$username = "root";
$password = "root";
$db = "login";
$dbconnect=mysqli_connect($hostname,$username,$password,$db);

if ($dbconnect->connect_error) {
  die("Database connection failed: " . $dbconnect->connect_error);
}
if(true) {
  $name=$_POST['name'];
  $hrname=$_POST['hrname'];
  $email=$_POST['email'];
  $message=$_POST['message'];


  $query = "INSERT INTO company (name, hr_name, email,message)
    VALUES ('$name','$hrname', '$email', '$message')";

    if (!mysqli_query($dbconnect, $query)) {
            die('An error occurred when submitting your registration.');
        } else {
          echo "Thanks  for invitations to this university  .";
        }
      }
      ?>
