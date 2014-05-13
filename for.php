<?php

fwrite (STDOUT, "Give me a starting number\n");
$start = trim(fgets(STDIN));

if (!is_numeric($start)){
	echo "Must be numeric.\n";
	exit (0);
}

fwrite (STDOUT, "Give me an ending number\n");
$end = trim(fgets(STDIN));

if (!is_numeric($end)){
	echo "Must be numeric.\n";
	exit (0);
}

fwrite (STDOUT, "Give me a number to increment by\n");
$increment = trim(fgets(STDIN));

if (!is_numeric($increment)){
	echo "Must be numeric.\n";
	exit (0);
}

if ($increment == 0) {
	$increment = 1;
}

for($b = $start; $b <= $end; $b += $increment){
	echo "\$b has a value of {$b}\n" . PHP_EOL;
}
