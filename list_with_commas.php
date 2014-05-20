<?PHP

$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicists_array = explode(', ', $physicists_string);

// array_pop($physicists_array);
// array_push($physicists_array, 'and Tony Stark');


// $famous_fake_physicists = implode(', ', $physicists_array);

// Create the $famous_fake_physicists string that lists the physicists 
// and contains the "and" at the end.


// echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.";



// Turn your solution into a function named humanized_list(). You should be able to pass the 
// $physicists_array as the only argument, and your function will return the result.

// take the array, remove the last item, add the word and to that item just removed,
// add the item back on

// Converts array into list n1, n2, ..., and n3
// function humanized_list($array) {
//   // Your solution goes here!
// }

// // List of famous peeps
// $physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// // Humanize that list
// $famous_fake_physicists = humanized_list($physicists_string);

// // Output sentence
// echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.";





function humanized_list($array) {
	//determine what the last element of the array is
	sort($array);
	$end = end($array);
	array_pop($array);
	//add the popped array value back on to the array and include 'and'

	array_push($array, ('and ' . $end));
	$list_of_names = implode(', ', $array);
	return $list_of_names;

}

// Update your code to list the physicists by first name, in alphabetical order.

// Create a second argument to make alphabetical sorting optional.

// Default alphabetical sorting to false. If no args are passed, no sorting takes place.





$name = humanized_list($physicists_array);
echo "Some of the most famous fictional theoretical physicists are {$name}.\n";

