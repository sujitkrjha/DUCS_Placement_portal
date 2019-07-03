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
  $fname=$_POST['fname'];
  $mname=$_POST['mname'];
  $lname=$_POST['lname'];
  $ffname=$_POST['ffname'];
  $fmname=$_POST['fmname'];
  $flname=$_POST['flname'];
  $tenth=$_POST['tenth'];
  $twelve=$_POST['twelve'];
  $grad=$_POST['grad'];
  $course=$_POST['ddlcourse'];
  $department=$_POST['ddlcolg'];
  $year=$_POST['ddlyear'];
  $cmark=$_POST['cmark'];
  $gender=$_POST['gender'];
  $pwd=$_POST['pwd'];
  $email=$_POST['email'];
  //$image=$_POST['image'];
//  $signatur=$_POST['signature'];
  //$resume=$_POST['resume'];

     $filename=$_FILES["image"]["name"];
     $filename1=$_FILES["signature"]["name"];
     $filename2=$_FILES["resume"]["name"];

		 $tmpname=$_FILES["image"]["tmp_name"];
     $tmpname1=$_FILES["signature"]["tmp_name"];
     $tmpname2=$_FILES["resume"]["tmp_name"];

		 $filetype=$_FILES["image"]["type"];
     $filetype1=$_FILES["signature"]["type"];
     $filetype2=$_FILES["resume"]["type"];

		$array=array('jpg','jpeg','png','gif','docx','pdf');
		$ext=pathinfo($filename,$filename1,$filename2,PATHINFO_EXTENSION);
			if (in_array($ext, $array)) {

  $query = "INSERT INTO register (fname, mname, lname, ffname,fmname, flname, tenth, twelve, grad, course, department, year, cmark, gender, pwd, emai,image,signature,resume)
    VALUES ('$fname', '$mname', '$lname','$ffname', '$fmname', '$flname', '$tenth', '$twelve', '$grad', '$course', '$department', '$year', '$cmark', '$gender', '$pwd', '$emai','$filename','$filename1','$filename2')";

    if (!mysqli_query($dbconnect, $query)) {
            die('An error occurred when submitting your review.');
        } else {
          echo "Thanks for your submitting forms.";
        }
      }
      ?>
