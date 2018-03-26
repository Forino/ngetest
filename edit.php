<?php
include "action.php";
$id=$_GET['nid'];
$query=mysqli_query("select * from tinfo where id='$id'");
?>

