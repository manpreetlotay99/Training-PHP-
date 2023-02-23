<html>
<title> Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<body>
<?php
class calculator{
	public $num1, $num2, $result;
	function __construct($num1, $num2){
		$this->num1= $num1;
		$this->num2= $num2;
	}
	function add(){
		$result= $this->num1 + $this->num2;
		return $result;
	}
	function sub(){
		$result= $this->num1 - $this->num2;
		return $result;
	}
	function multiply(){
		$result= $this->num1 * $this->num2;
		return $result;
	}
	function divide(){
		$result= $this->num1 / $this->num2;
		return $result;
	}
	
}
?>
<div class= "container">
<h3> CALCULATOR </h3>
<?php
$calc= new calculator(23,2);
echo "Result after Addition: ". $calc-> add()."\n"; 
echo "Result after Subtraction: ". $calc-> sub()."\n"; 
echo "Result after Multiplication: ". $calc-> multiply()."\n"; 
echo "Result after division: ". $calc-> divide()."\n"; 
?>
	
</div>
</body>
</html>
