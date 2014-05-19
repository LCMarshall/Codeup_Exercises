<?php

// Create a function that returns TRUE or FALSE if an array value is found. Search for Tina and Bob in $names. Make sure it works as expected.

// Create a function to compare 2 arrays that returns the number of values in common between the arrays. Use the 2 example arrays and make sure your solution uses array_search().

// first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function name_search($search, $names){

$result = array_search($search, $names);

	if($result !== false) {
		return TRUE;
	} else {
		return FALSE;
	}
}
echo name_search('Mike', $names);
