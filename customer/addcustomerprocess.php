<?php
$username = $_POST['username'];
$password = $_POST['password'];
$type = "customer";

$registrationID=$_POST['registrationID'];
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$contactNo=$_POST['contactNo'];
$address=$_POST['address'];
$image=$_POST['image'];

if(isset($_FILES['image']['name'])){
$image_name=$_FILES['image']['name'];
$image_tmp=$_FILES['image']['tmp_name'];
}else{
$image_name="Panel.png";
}
$tid =time();
$new_Image=$tid."_".$image_name;
$path="images/".$new_Image;
copy($image_tmp,$path);

require_once("../connection/dbconnection.php");

$sqlc="INSERT INTO customer 
VALUES('$registrationID','$firstName','$lastName','$dob'
,'$address','$contactNo','$email','$new_Image')";
$sqlu = "INSERT INTO user VALUES('$username','$password','$type')";
$results=mysqli_query($conn,$sqlc);
$results=mysqli_query($conn,$sqlu);

header("Location:../login/login.php");

?>