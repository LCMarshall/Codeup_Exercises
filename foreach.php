<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $type) {
	if (is_int($type)) {
		echo "{$type} is an integer\n";
	}
	elseif (is_bool($type)) {
		echo "{$type} is a boolean\n";
	}
	elseif (is_float($type)) {
		echo "{$type} is a float\n";
	}
	elseif (is_array($type)) {
		echo "{$type} is an array\n";
	}
	elseif (is_null($type)) {
		echo "{$type} is null\n";
	}
	elseif (is_string($type)) {
		echo "{$type} is a string\n";
	} else{
		echo "None of the above";
	}
}