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

    foreach ($arr as $word) {
        $newWord = '';
        for ($i = 0; $i < strlen($word); $i++) { //looping over word string
            if ($i == 0) {
                $newWord .= strtoupper($word[$i]); //converting the first letter with index '0' to upper case
            } else {
                $newWord .= $word[$i];
            }
        }

        $newString .= $newWord;
    }

    return $newString;
}
