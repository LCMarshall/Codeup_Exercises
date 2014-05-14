<?php

$fruits = array (
		'apples', 
		'oranges', 
		'bananas',
		'kiwi',
		'cantaloupe'
		);

// foreach ($fruits as $key => $value) {
// 		echo "Fruit is $value\n";
// }


for ($i =0 ; $i  < count($fruits) ; $i++ ) { 
	echo "Fruit name $fruits[$i]\n";
}


