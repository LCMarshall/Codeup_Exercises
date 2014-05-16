<?php

$nothing = NULL;
$something = '';
$array = array(1,2,3);

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"

function check($variable_name){
	if (isset($variable_name)){ 
		echo  "Set" . PHP_EOL;
	}elseif (empty($variable_name)) {
		echo "Empty" . PHP_EOL;
	}
}

// TEST: If var $nothing is set, display '$nothing is SET'

// TEST: If var $nothing is empty, display '$nothing is EMPTY'
check ($nothing);

// TEST: If var $something is set, display '$something is SET'
check ($something);

// Serialize the array $array, and output the results
echo serialize($array);

// Unserialize the array $array, and output the results
unserialize($array);
print_r($array);