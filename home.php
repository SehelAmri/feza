<?php
$firstname = $_POST['fname'];
$middlename = $_POST['mname'];
$lastname = $_POST['lname'];
$username = $_POST['uname'];
$password = $_POST['password'];
$dob = $_POST['dob'];
$cv = $_POST['cv'];
$email = $_POST['email'];
$phone = $_POST['pnum'];
$insta = $_POST['insta'];
$twitter = $_POST['twitter'];
$fb = $_POST['fb'];

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
  $INSERT= "INSERT Into registration (firstname,middlename,lastname,username,password,dob,file,email,
  phone,instagram,twitter,facebook) values('$firstname','$middlename','$lastname','$username','$password'
  ,'$dob','$cv','$email','$phone','$insta','$twitter','$fb')";
 mysqli_query($conn,$INSERT);
 header( "Location: http://localhost/feza/about.html" );
}
}else{
  echo "field cannot be empty";
  die();
}
?>