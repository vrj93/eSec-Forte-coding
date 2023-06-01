<?php

// Write Function which converts input String into camel casing and use delimiter also as per input. Capitalize 1st word only if original word was capital

/* $str = 'the-test-case';
$delimiter = '-'; */
$str = 'The_First_Word_Capital';
$delimiter = '_';

print_r(camelCase($str, $delimiter));

function camelCase($str, $delimiter)
{
    $arr = explode($delimiter, $str); // String to Array conversion
    $newString = ''; // Final output string

    for ($i = 0; $i < count($arr); $i++) {
        $eachWord = $arr[$i];
        $newWord = '';
        
        for ($j = 0; $j < strlen($eachWord); $j++) { //looping over word string
            if ($i == 0) {
                $newWord .= strtolower($eachWord[$j]);
            } else if ($i != 0 && $j == 0) {
                $newWord .= strtoupper($eachWord[$j]); //converting the first letter with index '0' to upper case
            } else {
                $newWord .= $eachWord[$j];
            }
        }

        $newString .= $newWord;
    }

    return $newString;
}
