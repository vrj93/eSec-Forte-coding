// write a function to find extra characters from the input string as per below logic, and return output as integer.

// $str = 'aaabdbnhaikjjm';

function findExtraCharacters(str) {
  const range = [
    "a",
    "b",
    "c",
    "d",
    "e",
    "f",
    "g",
    "h",
    "i",
    "j",
    "k",
    "l",
    "m",
    "n",
  ];

  let count = 0; // Initial count of characters that are not in the range

  for (let i = 0; i < str.length; i++) {
    let inRange = false;

    for (let j = 0; j < range.length; j++) {
      if (str[i].toLowerCase() === range[j]) {
        inRange = true;
        break;
      }
    }

    if (!inRange) {
      count++;
    }
  }

  return count;
}

const str = "abaxbdbbyyhwawiwjjjwem";
console.log(findExtraCharacters(str)); // Output: 7
