
<!DOCTYPE html>
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
 </head>
 <body>
 
 <?php include('action.php');
				$result = mysqli_query($con, "SELECT * FROM info ORDER BY id DESC") or die (mysqli_error());
				?>
				
	<form action="action.php" method="post">
		<table class="headtable">
			<thead>
				<tr>
					<th>Title</th>
					<th>author</th>
					<th>Date Published</th>
					<th>Number of pages</th>
					<th>Type of book</th>
					<th colspan="2">Action</th>
				</tr>
			</thead>
			<tbody>	
				<?php
				while ($res = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td>".$res['title']."</td>";
					echo "<td>".$res['author']."</td>";
					echo "<td>".$res['tanggal']."</td>";
					echo "<td>".$res['pages']."</td>";
					echo "<td>".$res['type']."</td>";
					echo "<td><a class=\"btn\" href=\"edit.php?id='.$res[id].'\">Edit</a> | <a class=\"btn\" href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
				?>
				</tr>
			</tbody>
		</table>
		
	<form action="action.php" method="post">
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
		
	<div class="input-group">
		<button type= "submit" name="submit" class="btn">Save</button>	
		</div>

	
	</form>
</body>
</html>
	
