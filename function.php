<?php 

// include "config.php";

$db = new mysqli('localhost', 'root', '', 'doctor_rating');

session_start();

if(isset($_POST['patient_submit'])){
  $fname     =  $_POST['fname'];
  $lname     =  $_POST['lname'];
  $gender    =  $_POST['gender'];
  $email     =  $_POST['email'];
  $contact   =  $_POST['contact'];
  $password  =  $_POST['password'];
 


  	$query="insert into patient_reg(fname,lname,gender,email,contact,password) 
  	values ('$fname','$lname','$gender','$email','$contact','$password')";


  	$run = mysqli_query($db, $query);

	if($run){
		echo "<script type='text/javascript'>alert('registered successfully')</script>";
		header("Location:patient-login.php");
	}else{
		echo "error";
	}

  
  
}



//patient login process
if(isset($_POST['patient_login'])){

	$email = $_POST['email'];
	$lpassword = $_POST['lpassword'];

	$mysql = new mysqli('localhost', 'root', '', 'doctor_rating');

	$result = $mysql->query("SELECT * FROM patient_reg where email='$email' AND password='$lpassword' ");
	$row = $result->fetch_assoc();

	if($row['email'] == $email AND $row['password'] == $lpassword  ){
		$message = 'login successfully done';
		echo "<script  type='text/javascript'>alert('$message')</script>";
		header("Location:patient-dashboard.php");

	}else{
		$message1 = 'login not successfully';
		echo "<script  type='text/javascript'>alert('$message1')</script>";

	}

}


//admin login process


if(isset($_POST['login_submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];

	$mysql = new mysqli('localhost', 'root', '', 'doctor_rating');

	$result=$mysql->query("select * from admin_login where username='$username' and password='$password'");

	$row = $result->fetch_assoc();

	if($row['username'] == $username AND $row['password'] == $password  ){
		$message = 'login successfully done';
		echo "<script  type='text/javascript'>alert('$message')</script>";
		header("Location:admin-dashboard.php");

	}else{
		$message1 = 'login not successfully';
		echo "<script  type='text/javascript'>alert('$message1')</script>";

	}

}








 ?>