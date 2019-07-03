<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

$hostname = "localhost";
$username = "root";
$password = "root";
$db = "login";
$dbconnect=mysqli_connect($hostname,$username,$password,$db);

if ($dbconnect->connect_error) {
  die("Database connection failed: " . $dbconnect->connect_error);
}

if(true) {
//	if(isset($_POST["username"]) && isset($_POST["password"]))
if(isset($_POST['submit']))
        {

            $username = $_POST["username"];
            $password = $_POST["password"];
            //
            // $username=stripcslashes($username);
            // $password=stripcslashes($password);
            // $username=mysql_real_escape_string($username);
            // $username=mysql_real_escape_string($password);
            //
            //
            $query="SELECT * FROM  signup where username='$username' && password='$password'";
            $data=mysqli_query($dbconnect,$query);
            $rowcount=mysqli_num_rows($data);
            if ($rowcount==1) {
               //session_start();
              // # code...
                      $_SESSION['user_name']=$username;
                      header('location:home.php');
              //echo "login ok";

            }
            else {
              echo "your username and password is wrong";
            }
            // $row = mysql_fetch_array($query);
            // if (($row['username']==$username)  && ($row['password']==$password)) {
            //     echo "login sucess ";
            // }
            // else {
            //   echo "fail";
            // }

            // if (mysql_num_rows($query)>0) {
            //   echo 'user name already exist';
            // }
            // else {
            //   mysql_query(" INSERT INTO username,password signup VALUES('$username','$password')");
            //   //echo "Sucessfully registered";
            // }
            //echo "suceesfully logged in"
            //  $_SESSION['username']=$username;
            //  header('location:register.html');
            //  session_start();
        //$_SESSION['username']=$username;

            // $result1 = "SELECT username FROM signup WHERE username = '$username' ";
            // $result2 = "SELECT password FROM signup WHERE password = '$password'";
            //
            // if($username == $result1 && $password == $result2)
            // {
            //     $_SESSION["logged_in"] = true;
            //     $_SESSION["Afazal"] = $username;
            // }
            // else
            // {
            //     echo'The username or password  is incorrect!';
            // }
    }
    // else {
    //   echo "Please Enter user name and password correct";
    // }
}

      ?>
