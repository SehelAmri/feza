<?php
$alumni = $_POST['aname'];
$yoe = $_POST['yoe'];
$yog = $_POST['yog'];
$headmasterE = $_POST['headmasterE'];
$headmasterG = $_POST['headmasterG'];
$famous = $_POST['famous'];
$results = $_POST['results'];
$occupation = $_POST['occupation'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];


if(!empty($username) || !empty($firstname) || !empty($middlename) || !empty($lastname) || !empty($password) || !empty($dob) || !empty($cv) || !empty($email) 
|| !empty($phone) || !empty($insta) || !empty($twitter) || !empty($fb)){
$host = "localhost";
$dbUser = "root";
$dbPass = "";
$dbname = "feza";

$conn = new mysqli($host,$dbUser,$dbPass,$dbname);
if(mysqli_connect_error()){
  die('connect error('. mysqli_connect_errno().')'. mysqli_connect_error());
}else{
  $INSERT= "INSERT Into alumni (alumni,yoe,yog,headEnroll,headGraduate,famousTeach,results,
  occupation,address,email,phone) values('$alumni','$yoe','$yog','$headmasterE','$headmasterG'
  ,'$famous','$results','$occupation','$address','$email','$phone')";
 mysqli_query($conn,$INSERT);
 header( "Location: http://localhost/feza/alumniData.php" );
}
}else{
  echo "field cannot be empty";
  die();
}
?>