<!DOCTYPE html>
<html lang="en">
<head>
	<title>Form</title>
</head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<body>
<div class="container mt-3">
	
	
		<h1>Students' Record</h1>
	
		<form action="insert.php" method="post">
			
<p><div class="col-sm-3">
			<label for="rollno" class="form-label"> Roll No:</label>
			<input type="text" class="form-control" placeholder="Roll No" name="rollno" id="rollno">
		
			</div>
	</p>
			
<p><div class="col-sm-3">
			<label for="name" class="form-label">Name:</label>
			<input type="text"class="form-control"  placeholder="Name" name="name" id="name">
			</div>
			</p>

			
<p><div class="col-sm-3">
			<label for="class"class="form-label">Class:</label>
			<input type="text" name="class" placeholder="Class" class="form-control" id="class">
			</div>
			</p>
		
		  <button type="submit" class="btn btn-primary" formaction="insert.php">
            Enter
        </button>
          
        <button type="submit" class="btn btn-primary" formaction="databasesql.php">
            View Records
        </button>
		</form>
		</div>
	
</body>
</html>
