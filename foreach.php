<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $type) {
	if (is_array($type)) {
		foreach ($type as $array) {
			echo "$array\n";
		} 
	} else {
		echo "{$type}\n";
	}	
}