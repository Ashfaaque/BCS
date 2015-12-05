<?php
$bookID=$_POST['bookID'];
$bookName=$_POST['bookName'];
$bookAuthor=$_POST['bookAuthor'];
$bookDescription=$_POST['bookDescription'];
$bookPrice=$_POST['bookPrice'];

if(isset($_FILES['bookImage']['name'])){
$image_name=$_FILES['bookImage']['name'];
$image_tmp=$_FILES['bookImage']['tmp_name'];
}else{
$image_name="Panel.png";
}
$tid =time();
$new_Image=$tid."_".$image_name;
$path="images/".$new_Image;
copy($image_tmp,$path);

require_once("../connection/dbconnection.php");

$sqls="INSERT INTO bookstore 
VALUES('$bookID','$bookName','$bookAuthor','$bookDescription'
,'$bookPrice','$new_Image')";
$results=mysqli_query($conn,$sqls);


header("Location:bookStoreManagement.php");




?>