<?php
// including the database connection file
include("action.php");
$con = mysqli_connect("localhost","root","","crud");
if(isset($_POST['Edit']))
{
	$id = mysqli_real_escape_string($con, $_POST['id']);
	
	$title = mysqli_real_escape_string($con, $_POST['title']);
	$author = mysqli_real_escape_string($con, $_POST['author']);
	$tanggal = mysqli_real_escape_string($con, $_POST['tanggal']);
	$pages = mysqli_real_escape_string($con, $_POST['pages']);	
	$type = mysqli_real_escape_string($con, $_POST['type']);		
	
	// checking empty fields
	if(empty($title) || empty($author) || empty($tanggal) || empty($pages) || empty($type)) {	
			
		if(empty($title)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($author)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($tanggal)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
		
		if(empty($pages)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
		
		if(empty($type)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($con, "UPDATE info SET title='$title', author='$author',tanggal='$tanggal', pages='$pages', type='$type' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}	
?>
<?php
//getting id from url
$id = $_GET['id'];
//selecting data associated with this particular id
$record = mysqli_query($con, "SELECT * FROM info WHERE id=$id");
if($record)
{
while($res = mysqli_fetch_assoc($record))
{
	$title = $res['title'];
	$author = $res['author'];
	$tanggal = $res['tanggal'];
	$pages = $res['pages'];
	$type = $res['type'];
	header('location: index.php');

}
}
?>
<html>
<head>

  <link href="jquery-ui-1.11.4/smoothness/jquery-ui.css" rel="stylesheet" />
  <script src="jquery-ui-1.11.4/external/jquery/jquery.js"></script>
  <script src="jquery-ui-1.11.4/jquery-ui.js"></script>
  <script src="jquery-ui-1.11.4/jquery-ui.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script>
   $(document).ready(function(){
    $("#tanggal").datepicker({
    })
   })
  </script>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form action="edit.php" method="post">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="input-group">
			<label>Title</label>
			<input type ="text" name="title" value="<?php echo $title;?>">
		</div>	
		<div class="input-group">
			<label>author</label>
			<input type ="text" name="author" value="<?php echo $author;?>">
		</div>
		<div class="input-group">
			<label>Date Published</label>
			<input type ="text" name="tanggal" id="tanggal" value="<?php echo $tanggal;?>">
		</div>
		
				<div class="input-group">
			<label>Number of Pages</label>
			<input type ="text" name="pages" value="<?php echo $pages;?>">
		</div>
	 
			<div class="input-group">
			 <td>Type of book</td><td>:</td>
			  <td><select name="type" value="<?php echo $type;?>">
			  <option value="one of novel">one of novel</option>
			  <option value="documentation">documentation</option>
			  <option value="other">other</option>
			  </select><br><br></td>
		</div>
			<tr>
				<button type= "updating" name="updating" class="btn">Save</button>
			</tr>
		
	</form>
</body>
</html>
