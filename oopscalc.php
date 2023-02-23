<html>
<title> Form</title>
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
$calc= new calculator(23,2);
echo $calc-> add()."\n"; 
echo $calc-> sub()."\n"; 
echo $calc-> multiply()."\n"; 
echo $calc-> divide()."\n"; 
?>
</body>
</html>
