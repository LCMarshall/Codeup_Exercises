<?php

fwrite (STDOUT, "Give me a starting number\n");
$start = (int) fgets(STDIN);

fwrite (STDOUT, "Give me an ending number\n");
$end = (int) fgets(STDIN);

fwrite (STDOUT, "Give me a number to increment by\n");
$increment = (int) fgets(STDIN);

if ($increment == 0) {
	$increment = 1;
}
	

for($b = $start; $b <= $end; $b += $increment){
	echo "\$b has a value of {$b}\n" . PHP_EOL;
}


