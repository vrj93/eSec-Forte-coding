<?php
// Write a function which will parse input string as per below logic & return the output as array.

$str = 'ppppsmoso';
print_r(parse($str));

function parse($str)
{
    $val = 0; //Initial value
    $output = [];

    for ($i = 0; $i < strlen($str); $i++) { //looping over each letter of the string
        if ($str[$i] == 'p') {
            $val += 1;
        }

        if ($str[$i] == 's') {
            $val = $val ** 2;
        }

        if ($str[$i] == 'm') {
            $val -= 1;
        }

        if ($str[$i] == 'o') {
            $output[] = $val;
        }
    }

    return $output;
}
