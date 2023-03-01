<!DOCTYPE html>
<html>

<head>
	<title>Data submitted</title>
</head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<body>
	<center>
		<?php
include 'connectivity.php';
 if(isset($_POST['rollno'])){
		$rollno = $_POST['rollno'];
		$name = $_POST['name'];
		$class = $_POST['class'];
if($rollno && $name && $class !=0){		
		$sql = "INSERT INTO schoolstudents VALUES ('$rollno','$name','$class')";
 
		if(mysqli_query($conn, $sql)){
		?>
		<div class="container mt-3">
			<div class="alert alert-success">
			Data stored in the database successfully
			</div>
			</div>
			
       
		<?php	
		} 
		else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
 }
 else{
	?>
	<div class="container mt-3">
	<div class="alert alert-danger">
	 Empty values cannot be entered
	 </div>
	 </div>
	
	 <?php
 }
 }
	mysqli_close($conn);
 
		?>
		 <form>
<center>
 <button type="submit" class="btn btn-primary" formaction="databasehtml.php">
            Home
 </center>       </button>	
</form> 

	</center>
</body>

</html>
