<?php

function add($a, $b) {
    echo $a + $b . PHP_EOL;
}

function subtract($a, $b) {
    echo $a - $b . PHP_EOL;
}

function multiply($a, $b) {
    echo $a * $b . PHP_EOL;
}

function divide($a, $b) {
    echo $a / $b . PHP_EOL;

function modulus($a, $b) {
	echo $a % $b . PHP_EOL;
}
}

add (1, 2);
subtract (10, 5);
multiply (2, 3);
divide (2, 2);
modulus (10, 5);

?>