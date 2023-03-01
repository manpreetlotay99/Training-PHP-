<html>
<head>
<title> Edit Records</title>
</head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<?php error_reporting(0);  
include 'connectivity.php';

$rollno= $_GET['rollno'];
$name= $_GET['name'];
$class= $_GET['class'];
 $query = "SELECT * FROM `schoolstudents` WHERE rollno='$rollno'";
$result = $conn->query($query);

    if ($result->num_rows>0) 
     { 
		$row = $result->fetch_assoc();
         
		 ?>
		 
<body>
<div class="container mt-3">
	
	
		<h1>Students' Record</h1>
	
		<form action="databaseedituser.php" method="get">
			
<p><div class="col-sm-3">
		<label for="rollno" class="form-label"> Roll No:</label>
			<input type="text" class="form-control" name="rollno" id="rollno" value="<?php echo $row['rollno']; ?>">
		
			</div>
	</p>
			
<p><div class="col-sm-3">
			<label for="name" class="form-label">Name:</label>
			<input type="text"class="form-control"  name="name" id="name" value="<?php echo $row['name']; ?>">
			</div>
			</p>

			
<p><div class="col-sm-3">
			<label for="class"class="form-label">Class:</label>
			<input type="text" name="class" value="<?php echo $row['class']; ?>" class="form-control" id="class">
			</div>
			</p>
		
		  <button type="submit" class="btn btn-primary">
            Submit
        </button>
	 <?php  
     } 
     else {
        echo "0 results";
    }
  ?>
  
        
		</form>
		</div>
</body>
</html>