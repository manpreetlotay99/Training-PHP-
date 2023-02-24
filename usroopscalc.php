<html>
<title> Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<body>


<div class="container mt-3">
<h3> CALCULATOR </h3>
<form action="usroopscalc.php" method="post">
<div class="mb-3 mt-3">
<label for="num1" class="form-label">Enter the 1st number<br>
<input type="text" class="form-control" id="num1" name="num1">
</div>
 <div class="mb-3">
<label for="num2" class="form-label">Enter the 2nd number<br>
<input type="text" class="form-control" id="num2" name="num2">
</div>

<input type="submit" class="btn btn-primary" name="operator" value="Add">
<input type="submit" class="btn btn-primary" name="operator" value="Subtract" >
<input type="submit" class="btn btn-primary" name="operator" value="Multiply" > 
<input type="submit" class="btn btn-primary" name="operator" value="Divide" >
</form>

<?php
include 'classcalculator.php';
 
if(isset($_POST['num1'])){
$num1= $_POST['num1'];
$num2= $_POST['num2'];
$operator= $_POST['operator'];
$calculator= new calculator($num1,$num2, $operator);
echo "The result is ". $calculator-> operatormethod();
}
?>
</div>
 
</body>
</html>
