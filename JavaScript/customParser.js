// Write a function which will parse input string as per below logic & return the output as array.

function parse(str) {
  let val = 0; // Initial value
  const output = [];

  for (let i = 0; i < str.length; i++) {
    if (str[i] === "p") {
      val += 1;
    }

    if (str[i] === "s") {
      val = val ** 2;
    }

    if (str[i] === "m") {
      val -= 1;
    }

    if (str[i] === "o") {
      output.push(val);
    }
  }

  return output;
}

const str = "ppppsmoso";
console.log(parse(str)); //output: [15, 225]
