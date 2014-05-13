<?php

fwrite (STDOUT, "Give me a starting number\n");
$start = (int) fgets(STDIN);

fwrite (STDOUT, "Give me an ending number\n");
$end = (int) fgets(STDIN);

for($b = $start; $b <= $end; $b++){
	echo "\$b has a value of {$b}\n" . PHP_EOL;
}