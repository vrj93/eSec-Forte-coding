// Write Function which converts input String into camel casing and use delimiter also as per input. Capitalize 1st word only if original word was capital

/* $str = 'the-test-case';
$delimiter = '-'; */

function camelCase(str, delimiter) {
    const arr = str.split(delimiter); // String to Array conversion
    let newString = ''; // Final output string
  
    for (let i = 0; i < arr.length; i++) {
      const word = arr[i];
      let newWord = '';
      
      for (let j = 0; j < word.length; j++) {
        if (i == 0) {
            newWord += word[j].toLowerCase(); // small the first letter of the first word
        } else if (i !== 0 && j === 0) {
          newWord += word[j].toUpperCase(); // Capitalize the first letter of the first word
        } else {
          newWord += word[j];
        }
      }
      
      newString += newWord;
    }
  
    return newString;
  }
  
  const str = 'The_First_Word_Capital';
  const delimiter = '_';
  console.log(camelCase(str, delimiter)); // Output: theFirstWordCapital
  