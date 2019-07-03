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
  $course=$_POST['ddlcourse'];
  $department=$_POST['ddlcolg'];
  $year=$_POST['ddlyear'];
  $number=$_POST['contact'];
  $email=$_POST['email'];
  $username=$_POST['username'];
  $password=$_POST['password'];


  $query = "INSERT INTO student_cordinator (name, course, department_college, year, mobile, email, username, password)
    VALUES ('$name','$course','$department','$year','$number', '$email','$username', '$password')";

    if (!mysqli_query($dbconnect, $query)) {
            die('An error occurred when submitting your registration.');
        } else {
          echo "Thanks for your College Studnet Cordinator registrations .";
        }
      }
      ?>
