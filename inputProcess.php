<?php
class inputProcess{
	public function getInputArray(array $argv){
		$inputs = null;
        if(isset($argv[2])) {  // check for inputs.
           $temporaryInputs  = explode(',', $argv[2]); 
           // if new line seperatoe "\n" is added.
           foreach($temporaryInputs as $inputString) {
         	    $inputData = explode('n', $inputString);
         	    foreach($inputData as $data) {
         	     	$inputs[] = $data;
         	     }
           }
	    }
	    else {
		  $inputs[] = 0;  // if user has not provided any input then get 0 as default method.
	    }
	    return $inputs;
	}
}