<?php

$title = "";
$author = "";
$tanggal="";
$pages="";
$type="";
$id=0;

$con = mysqli_connect("localhost","root","","crud");
 
 if(isset($_POST['submit'])){
$title = $_POST['title'];
$author = $_POST['Author'];
$tanggal = $_POST['tanggal'];
$pages = $_POST['pages'];
$type = $_POST['type'];
 
if(!$tanggal){
	echo $tanggal;
}else{
	
$query = "INSERT INTO info (title,author,tanggal,pages,type) VALUES ('$title','$author','$tanggal','$pages','$type')";
$run_query=mysqli_query($con,$query);
header('location: index.php');
 }}
 

	// retrive records
	$result = mysqli_query($con, "SELECT * FROM info");
 
?>

