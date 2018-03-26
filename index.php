<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Address</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>John</td>
				<td>United States</td>
				<td>
					<a href="#">Edit</a>
				</td>
				<td>
					<a href="#">Delete</a>
				</td>
			</tr>
		</tbody>
	</table>
	
	<form method="post" action="server.php">
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name">
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="Address">
		</div>
		<div class="input-group">
			<button type="submit" name "save" class="btn">Save</button>
			</div>
	</form>
	
</body>
</html>	