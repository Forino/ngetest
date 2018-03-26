<?php
include "action.php";
$title=$_GET['title'];
$query="DELETE from info where title='$title'";
if($query){
?><script language="javascript">document.location.href="index.php";</script><?php
}
?>