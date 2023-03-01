<html>
<head>
<title>
</title>
</head>
	
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>

<?php error_reporting(0);  
include 'connectivity.php';

$rollno= $_GET['rollno'];
$name= $_GET['name'];
$class= $_GET['class'];
$sql = "UPDATE schoolstudents SET name='$name', class='$class' WHERE rollno='$rollno'";
$result= mysqli_query($conn,$sql);
 $query = "SELECT * FROM `schoolstudents`;";
  
   $result = $conn->query($query);
  
    if ($result->num_rows > 0) 
     {
		 ?>
		 <div class="container mt-3">
		 <table class="table table-striped">
				<thead>
				<tr>
					<th>Roll No</th>
					<th>Name</th>
					<th>Class</th>
						<th>Edit</th>
					<th>Delete</th>
				  </tr>
				</thead>
		
			<?php
         
        while($row = $result->fetch_assoc())
         {
				?>
				<tbody>
				  <tr>
					<td><?php echo $row['rollno'] ?></td>
					<td><?php echo $row['name'] ?></td>
					<td><?php echo $row['class'] ?></td>
					<td><a href="databseedit.php?rollno=<?php echo $row['rollno']?>"><i class='fas fa-user-edit'></a></i></td>		
					<td><a href="databasedel.php?rollno=<?php echo $row['rollno']?>"><i class='far fa-window-close'></a></i></td>
					<td><i class= ></td>
				  </tr>
				 
	  <?php
        }
     } 
     else {
        echo "0 results";
    }
  ?>
                 </tbody>
				 </table>
				 </div>
  <?php $conn->close(); ?>
<form>
<center>
 <button type="submit" class="btn btn-primary" formaction="databasehtml.php">
            Home
 </center>       </button>
          
</form>
</body>
</html>
