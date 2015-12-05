<?php
session_start();//To start the session
//Get user name and password
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$type=$_POST['type']; //To get encrypted password
require_once("../connection/dbconnection.php");
//Query
$sql="SELECT * FROM user WHERE username='$uname' AND password='$pass'";
//To execute the query
$result=$conn->query($sql);
//To count the users
$count=$result->num_rows;
if($count!=0){
	//To get all staff Information
	if($type=="customer"){
		$sqlu="SELECT * FROM user u, customer c WHERE u.username='$uname' AND u.userID = c.userID";
	}else if($type=="staff"){
		$sqlu="SELECT * FROM user u, staff s WHERE u.username='$uname' AND u.userID = s.userID";
	}else{
		$msg="Please select a valid user type";
		header("Location:login.php?id=$msg");
	}
	$resultu=$conn->query($sqlu);
	$rowu=$resultu->fetch_assoc();
	$_SESSION['registrationID']=$rowu['regno'];
	$_SESSION['firstName']=$rowu['firstname'];
	$_SESSION['lastName']=$rowu['lastname'];
	$_SESSION['dob']=$rowu['dob'];
	$_SESSION['address']=$rowu['address'];
	$_SESSION['contactNo']=$rowu['contactno'];
	$_SESSION['email']=$rowu['email'];
	$_SESSION['image']=$rowu['image'];
	$_SESSION['type']=$rowu['type'];
	$type = $rowu['type'];
	
	if($type=="customer"){
		header("Location:../customer/customerProfile.php");
	}else if($type=="staff"){
		header("Location:../staff/staffProfile.php");
	}else{
		$msg="Invalid User Name or Password";
		header("Location:login.php?id=$msg");
	}
	
}else{
	//if user name n password are invalid redirect to 
	//the Index page with an error
	$msg="Invalid User Name or Password";
	header("Location:login.php?id=$msg");	
}

?>