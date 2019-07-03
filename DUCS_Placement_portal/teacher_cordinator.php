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
  $department=$_POST['ddlcolg'];
  $number=$_POST['contact'];
  $email=$_POST['email'];
  $username=$_POST['username'];
  $password=$_POST['password'];


  $query = "INSERT INTO teacher_cordinator (name, department_college, mobile, email, username, password)
    VALUES ('$name','$department','$number', '$email','$username', '$password')";

    if (!mysqli_query($dbconnect, $query)) {
            die('An error occurred when submitting your registration.');
        } else {
          echo "Thanks  College Proffessor Cordinator registrations .";
        }
      }
      ?>
