<?php
class calculator{
	public $num1, $num2, $result, $operator;
	function __construct($num1, $num2, $operator){
		$this->num1= $num1;
		$this->num2= $num2;
		$this->operator= $operator;
		
	}
	function operatormethod(){
	switch ($this-> operator){
		case 'Add':
		$result= $this->num1 + $this->num2;
		break;
		case 'Subtract':
		$result= $this->num1 - $this->num2;
		break;
		case 'Multiply':
		$result= $this->num1 * $this->num2;
		break;
		case 'Divide':
		$result= $this->num1 / $this->num2;
		break;
	}
	return $result;
	}
	
}
?>