<?php
// write a function to find extra characters from the input string as per below logic, and return output as integer.

// $str = 'aaabdbnhaikjjm';
$str = 'abaxbdbbyyhwawiwjjjwem'; //correct output of this string is 7 not 8. (8 can be possible if any one in legal characters is Capital instade of small)

print_r(findExtraCharacters($str));

function findExtraCharacters($str)
{
    $range = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n'];
    $count = 0; //initial count of charachters that is not in the range.

    for ($i = 0; $i < strlen($str); $i++) {
        $inRange = false;
        for ($j = 0; $j < count($range); $j++) {
            if (ord($str[$i]) === ord($range[$j])) { // getting the ASCII of each charachter to compare small and capital case 
                $inRange = true;
                break;
            }
        }

        if (!$inRange) { // Incrementing count if chrachter is not in the range.
            $count++;
        }
    }

    return $count;
}
