<?php
// calculator class.

class Calculator{

	// magic method to access method if user provided invalid operation.
	public function __call($method, $args){
		throw new Exception("You have provided invalid arithmatic operation.");
	}
	/**
	* Method  to perform sum operation.
	* @param array $inputs  input array. 
	**/
	public function sum(array $inputs){
		return array_sum($inputs); // return array sum .
	}
	
}

try{
	if($argc <= 1) {      // check number of passed parameters. if less that 2 then throuw error.
        throw new Exception("Please enter method name. ");
	}
	$methodName = $argv[1];   // get user provided operation.
	if(isset($argv[2])) {  // check for inputs.
         $inputs = explode(',', $argv[2]); 
	}
	else {
		$inputs[] = 0;  // if user has not provided any input then get 0 as default method.
	}
	$calculatorObj = new Calculator();   
	echo "Your result is :".$calculatorObj->{$methodName}($inputs)."\n";   // call required operation.
}
catch(Exception $e) {
	echo $e->getMessage()."\n";  
}
