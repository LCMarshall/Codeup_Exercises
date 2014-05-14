<?php

$fruits = array (
		'apples' => 'red', 
		'oranges' => 'orange', 
		'bananas' => 'yellow',
		'kiwi' => 'green',
		'cantaloupe' => 'peach'
		);

// foreach ($fruits as $key => $value) {
// 		echo "Fruit is $value\n";
// }


// for ($i =0 ; $i  < count($fruits) ; $i++ ) { 
// 	echo "Fruit name $fruits[$i]\n";
// }

foreach ($fruits as $fruit => $color) {
	echo $fruit . " has a color of " . $color . PHP_EOL;
}
