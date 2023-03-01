<html>
<head>
<title> Delete Records</title>
</head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<body>
<?php
include 'connectivity.php';
if(isset($_GET['rollno'])){
$rollno= $_GET['rollno'];
$sql = "DELETE FROM schoolstudents WHERE rollno='$rollno'";

if ($conn->query($sql) === TRUE) {
  ?>
  <div class="container mt-3">
			<div class="alert alert-success">
			Data stored in the database successfully
			</div>
			</div>
<?php 
} else {
  ?>
  <div class="container mt-3">
	<div class="alert alert-danger">
	 Empty values cannot be entered
	 </div>
 </div>
  <?php 
}
?>
<form>
<center>
 <button type="submit" class="btn btn-primary" formaction="databasehtml.php">
            Home
 </center>       </button>	
</form> 
<?php
}
$conn->close();
	
?>
</body>
</html>
