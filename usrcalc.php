<html>
<title> Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<body>
<?php
if(isset($_POST['num1'])){
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$operator = $_POST["operator"];
$result = '';
    switch ($operator) {
        case "Add":
           $result = $num1 + $num2;
            break;
		 case "Subtract":
           $result = $num1 - $num2;
            break;
		 case "Multiply":
           $result = $num1 * $num2;
            break;
		 case "Divide":
           $result = $num1 / $num2;
            break;
	}


}
?>


 <div class="container mt-3">
<form action="usrcalc.php" method="post">
<div class="mb-3 mt-3">
<label for="num1" class="form-label">Enter the 1st number<br>
<input type="text" class="form-control" id="num1" name="num1">
</div>
 <div class="mb-3">
<label for="num2" class="form-label">Enter the 2nd number<br>
<input type="text" class="form-control" id="num2" name="num2">
</div>

<input type="submit" class="btn btn-primary" name="operator" value="Add">
<input type="submit" class="btn btn-primary" name="operator" value="Subtract">
<input type="submit" class="btn btn-primary" name="operator" value="Multiply"> 
<input type="submit" class="btn btn-primary" name="operator" value="Divide">
</form>

<?php
if(isset($result)){
echo "Result is: ". $result;
}
?>
</div>
</body>
</html>
