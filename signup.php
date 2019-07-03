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
  $email=$_POST['email'];
  $number=$_POST['number'];
  $username=$_POST['username'];
  $password=$_POST['password'];


  $query = "INSERT INTO signup (name, email, username, password, contact )
    VALUES ('$name', '$email','$username', '$password','$number')";

    if (!mysqli_query($dbconnect, $query)) {
            die('An error occurred when submitting your registration.');
        } else {
          echo "Thanks for your registrations .";
        }
      }
      ?>
