<?php

$a = 5;
$b = 10;
$c = '10';


if ($a < $b) {
    
    echo "$a is less than $b";
} else {

    echo "$b is less than $a";
}

// Shorten the next 2 statements into an if/else
if ($b >= $c) {

    echo "$b is greater than or equal to $c\n";
}

else {
    
    echo "$b is less than or equal to $c\n";
}


if ($b === $c) {
    echo "$b is identical to $c";
}
    elseif ($b == $c) {
    echo "$b is equal to $c";
}
    elseif ($b !== $c) {
    echo "$b is not identical to $c";
}
    else {
    echo "$b is not equal to $c";

}

?>