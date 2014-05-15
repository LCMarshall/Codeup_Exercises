<?php

// Validate all the arguments, and display an error if the input is not numeric.

// Validate divide by 0 errors, display error if attempts to divide by 0 are made.

// Make the error messages show the values of the arguments.

// Refactor the error messages into their own function, have the other functions use it for error messaging.


function add($a, $b) {
	if(is_numeric($a) && is_numeric ($b)){
		echo $a + $b . PHP_EOL;
	}else {
		echo "Error: both {$a} and {$b} should be numbers";
	}
	echo PHP_EOL;    
}

function subtract($a, $b) {
    if(is_numeric($a) && is_numeric ($b)){
		echo $a - $b . PHP_EOL;
	}else {
		echo "Error: both {$a} and {$b} should be numbers";
	}
	echo PHP_EOL;
}

function multiply($a, $b) {
    if(is_numeric($a) && is_numeric ($b)){
		echo $a * $b . PHP_EOL;
	}else {
		echo "Error: both {$a} and {$b} should be numbers";
	}
	echo PHP_EOL;
}

function divide($a, $b) {
    if ($b == 0 && is_numeric ($b)) {
    	echo "Cannot divide by zero";
	} else{
		if (is_numeric($a) && is_numeric ($b)){
		echo $a / $b;}
		else {
		echo "Error: both {$a} and {$b} should be numbers";
		}
	}
	echo PHP_EOL;
}
	

function modulus($a, $b) {
	if(is_numeric($a) && is_numeric ($b)){
		echo $a % $b;
	}else {
		echo "Error: both {$a} and {$b} should be numbers";
	}
	echo PHP_EOL;
}

add (1, b);
// // subtract (10, a);
// // multiply (2, b);
// divide (2, test);
// // modulus (10, d);

?>