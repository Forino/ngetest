<<?php
include("action.php");
include ("index.php");
if(isset($_GET['id'])){
$id=$_GET['id'];
$delete = "DELETE FROM info WHERE id=$id";
$run=mysqli_query($con, $delete);
if($run){
header('location: index.php');
} }

?>
